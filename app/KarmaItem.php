<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Log;

/**
 * App\KarmaItem
 *
 * @property int $id
 * @property int $user_id
 * @property string $karmable_type
 * @property int $karmable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Model|Eloquent $karmable
 * @property-read User $user
 * @method static Builder|KarmaItem newModelQuery()
 * @method static Builder|KarmaItem newQuery()
 * @method static Builder|KarmaItem query()
 * @method static Builder|KarmaItem whereCreatedAt($value)
 * @method static Builder|KarmaItem whereId($value)
 * @method static Builder|KarmaItem whereKarmableId($value)
 * @method static Builder|KarmaItem whereKarmableType($value)
 * @method static Builder|KarmaItem whereUpdatedAt($value)
 * @method static Builder|KarmaItem whereUserId($value)
 * @mixin Eloquent
 * @property int $value
 * @method static Builder|KarmaItem whereValue($value)
 */
class KarmaItem extends Model
{
    protected $fillable = [
        'value',
        'user_id',
    ];

    public function karmable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::updating(function (KarmaItem $karma) {
            $lastValue = $karma->getOriginal('value');

            if ($lastValue == $karma->value) {
                return;
            }

            /** @var User $user */
            $user = $karma->karmable->user;

            if (! $user) {
                Log::critical('KarmaItem saved, but target user doesn\'t found!', [
                    'karma_item' => $karma,
                ]);

                return;
            }

            $user->karma += $karma->value * 2;

            $user->save();
        });
    }
}

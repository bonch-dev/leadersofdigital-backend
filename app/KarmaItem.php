<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\KarmaItem
 *
 * @property int $id
 * @property int $user_id
 * @property string $karmable_type
 * @property int $karmable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $karmable
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereKarmableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereKarmableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereUserId($value)
 * @mixin \Eloquent
 * @property int $value
 * @method static \Illuminate\Database\Eloquent\Builder|\App\KarmaItem whereValue($value)
 */
class KarmaItem extends Model
{
    protected $fillable = [
        'value'
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
        static::saving(function (KarmaItem $karma) {
            $lastValue = $karma->getOriginal('value');

            if ($lastValue == $karma->value) {
                return;
            }

            /** @var User $user */
            $user = $karma->karmable->user;

            if (! $user) {
                \Log::critical('KarmaItem saved, but target user doesn\'t found!', [
                    'karma_item' => $karma,
                ]);

                return;
            }

            $user->karma += $karma->value * 2;

            $user->save();
        });
    }
}

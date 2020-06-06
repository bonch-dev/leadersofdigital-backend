<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * App\RateItem
 *
 * @property int $id
 * @property int $user_id
 * @property string $rateable_type
 * @property int $rateable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $rateable
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereRateableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereRateableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\RateItem whereUserId($value)
 * @mixin \Eloquent
 */
class RateItem extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function rateable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

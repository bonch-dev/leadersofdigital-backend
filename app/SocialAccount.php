<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\SocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider_user_id
 * @property string $provider
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereProviderUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialAccount whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User $user
 */
class SocialAccount extends Model
{
    protected $fillable = [
        'provider_user_id',
        'provider',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

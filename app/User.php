<?php

namespace App;

use Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $karma
 * @property int $rank
 * @property-read int $influence
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SocialAccount[] $social_accounts
 * @property-read int|null $social_accounts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $subscribers
 * @property-read int|null $subscribers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $subscribes
 * @property-read int|null $subscribes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereKarma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRank($value)
 * @property string|null $birthday_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBirthdayAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property-read int|null $events_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Initiative[] $initatives
 * @property-read int|null $initatives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\KarmaItem[] $karma_items
 * @property-read int|null $karma_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\RateItem[] $rate_items
 * @property-read int|null $rate_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 */
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birthday_at' => 'datetime',
    ];

    public function social_accounts(): HasMany
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function subscribers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'subscribers',
            'user_id',
            'subscriber_id'
        )->using(Subscriber::class);
    }

    public function getInfluenceAttribute(): int
    {
        return $this->subscribers()->count();
    }

    public function subscribes(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'subscribers',
            'subscriber_id',
            'user_id'
        )->using(Subscriber::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function initatives(): HasMany
    {
        return $this->hasMany(Initiative::class);
    }

    public function rate_items(): HasMany
    {
        return $this->hasMany(RateItem::class);
    }

    public function karma_items(): HasMany
    {
        return $this->hasMany(KarmaItem::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}

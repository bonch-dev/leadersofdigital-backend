<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Carbon;
use Optix\Media\HasMedia;

/**
 * App\Petition
 *
 * @property int $id
 * @property int|null $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property string $phone
 * @property string|null $place
 * @property-read Collection|Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Collection|KarmaItem[] $karma_items
 * @property-read int|null $karma_items_count
 * @property-read User|null $user
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereDescription($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereName($value)
 * @method static Builder|Event wherePhone($value)
 * @method static Builder|Event wherePlace($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @method static Builder|Event whereUserId($value)
 * @mixin Eloquent
 * @property string $status
 * @method static Builder|Event whereStatus($value)
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @property-read Collection|RateItem[] $rate_items
 * @property-read int|null $rate_items_count
 * @property string $title
 * @property-read int $total_karma
 * @property-read int $total_rate
 * @method static Builder|Event whereTitle($value)
 */
class Event extends Model
{
    use HasMedia;

    protected $with = [
        'user',
    ];

    protected $fillable = [
        'title',
        'description',
        'phone',
        'place',
    ];

    public const MODERATED = 'moderated';
    public const NOT_MODERATED = 'not_moderated';
    public const IN_PROGRESS = 'in_progress';

    //
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function karma_items(): MorphMany
    {
        return $this->morphMany(KarmaItem::class, 'karmable');
    }

    public function getTotalKarmaAttribute(): int
    {
        return $this->karma_items()->sum('value');
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function rate_items(): MorphMany
    {
        return $this->morphMany(RateItem::class, 'rateable');
    }

    public function getTotalRateAttribute(): int
    {
        return $this->rate_items()->count();
    }
}

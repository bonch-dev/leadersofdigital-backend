<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Optix\Media\HasMedia;

/**
 * App\Initiative
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $video_url
 * @property string $title
 * @property string $description
 * @property string $objective
 * @property string $goals
 * @property string $geography
 * @property string $result
 * @property string $additional
 * @property string|null $answer
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\RateItem[] $rate_items
 * @property-read int|null $rate_items_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereAdditional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereGeography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereGoals($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereObjective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Initiative whereVideoUrl($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\User|null $user
 */
class Initiative extends Model
{
    use HasMedia;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }

    protected $with = [
        'user',
    ];

    protected $fillable = [
        'video_url',
        'title',
        'description',
        'objective',
        'goals',
        'geography',
        'result',
        'additional',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function rate_items(): MorphMany
    {
        return $this->morphMany(RateItem::class, 'rateable');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Optix\Media\HasMedia;

/**
 * App\Question
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon $end_at
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read int $total_karma
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\KarmaItem[] $karma_items
 * @property-read int|null $karma_items_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\QuestionItem[] $question_items
 * @property-read int|null $question_items_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Answer[] $answers
 * @property-read int|null $answers_count
 * @property-read int $votes_count
 * @property-read int $votes_sum
 */
class Question extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }

    use HasMedia;
    //
    protected $fillable = [
        'title',
        'description',
        'end_at'
    ];

    protected $dates = [
        'end_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function question_items(): HasMany
    {
        return $this->hasMany(QuestionItem::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function getVotesCountAttribute(): int
    {
        return $this->answers()->count();
    }

    public function getVotesSumAttribute(): int
    {
        return $this->answers()->sum('count');
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
}

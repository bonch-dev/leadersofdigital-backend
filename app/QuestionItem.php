<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\QuestionItem
 *
 * @property int $id
 * @property int $question_id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Answer[] $answers
 * @property-read int|null $answers_count
 * @property-read \App\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\QuestionItem whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read int $votes_count
 * @property-read int $votes_sum
 */
class QuestionItem extends Model
{
    protected $fillable = [
        'text'
    ];

    //
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
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
}

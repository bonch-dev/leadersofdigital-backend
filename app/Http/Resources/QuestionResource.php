<?php

namespace App\Http\Resources;

use App\Question;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class QuestionResource
 * @package App\Http\Resources
 * @mixin Question
 */
class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var User $user */
        $user = $request->user('api');
        $karmed = 0;
        $voted = false;

        if ($user) {
            $karma = $this->karma_items()->firstWhere('user_id', $user->id);

            if ($karma) {
                $karmed = $karma->value;
            }

            $rate = $this->answers()->firstWhere('user_id', $user->id);

            $voted = ! is_null($rate);
        }

        return [
            'title' => $this->title,
            'description' => $this->description,
            'karma' => $this->total_karma,
            'karmed' => $karmed,
            'votes_count' => $this->votes_count,
            'votes_sum' => $this->votes_sum,
            'voted' => $voted,
            'comments' => CommentResource::collection($this->comments),
            'question_items' => QuestionItemResource::collection($this->question_items),
            'end_at' => $this->end_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

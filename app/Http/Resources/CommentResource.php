<?php

namespace App\Http\Resources;

use App\Comment;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class CommentResource
 * @package App\Http\Resources
 * @mixin Comment
 */
class CommentResource extends JsonResource
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
        $voted = 0;

        if ($user) {
            $vote = $this->karma_items()->firstWhere('user_id', $user->id);

            if ($vote) {
                $voted = $vote->value;
            }
        }

        return [
            'id' => $this->id,
            'user' => $this->user,
            'text' => $this->text,
            'karma' => $this->total_karma,
            'voted' => $voted,
        ];
    }
}

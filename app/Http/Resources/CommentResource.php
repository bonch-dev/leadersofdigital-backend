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
        $karmed = 0;

        if ($user) {
            $karma = $this->karma_items()->firstWhere('user_id', $user->id);

            if ($karma) {
                $karmed = $karma->value;
            }
        }

        return [
            'id' => $this->id,
            'user' => UserResource::make($this->user),
            'text' => $this->text,
            'karma' => $this->total_karma,
            'karmed' => $karmed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

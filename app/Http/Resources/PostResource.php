<?php

namespace App\Http\Resources;

use App\Post;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PostResource
 * @package App\Http\Resources
 * @mixin Post
 */
class PostResource extends JsonResource
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
            'title' => $this->title,
            'text' => $this->text,
            'photos' => MediaResource::collection($this->media),
            'comments' => CommentResource::collection($this->comments),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'karma' => $this->total_karma,
            'karmed' => $karmed,
        ];
    }
}

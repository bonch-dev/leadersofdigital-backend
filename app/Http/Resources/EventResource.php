<?php

namespace App\Http\Resources;

use App\Event;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class EventResource
 * @package App\Http\Resources
 * @mixin Event
 */
class EventResource extends JsonResource
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
        $rated = false;

        if ($user) {
            $karma = $this->karma_items()->firstWhere('user_id', $user->id);

            if ($karma) {
                $karmed = $karma->value;
            }

            $rate = $this->rate_items()->firstWhere('user_id', $user->id);

            $rated = ! is_null($rate);
        }

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'phone' => $this->phone,
            'place' => $this->place,
            'user' => UserResource::make($this->user),
            'karma' => $this->total_karma,
            'karmed' => $karmed,
            'rate' => $this->rate_items()->count(),
            'rated' => $rated,
            'photos' => MediaResource::collection($this->media),
            'comments' => CommentResource::collection($this->comments),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

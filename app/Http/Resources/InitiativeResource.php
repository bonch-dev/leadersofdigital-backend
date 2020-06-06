<?php

namespace App\Http\Resources;

use App\Initiative;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class InitiativeResource
 * @package App\Http\Resources
 * @mixin Initiative
 */
class InitiativeResource extends JsonResource
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
        $rated = false;

        if ($user) {
            $rate = $this->rate_items()->firstWhere('user_id', $user->id);

            $rated = ! is_null($rate);
        }

        return [
            'id' => $this->id,
            'user' => UserResource::make($this->user),
            'video_url' => $this->video_url,
            'title' => $this->title,
            'description' => $this->description,
            'objective' => $this->objective,
            'goals' => $this->goals,
            'geography' => $this->geography,
            'result' => $this->result,
            'additional' => $this->getAttribute('additional'),
            'rate' => $this->rate_items()->count(),
            'rated' => $rated,
            'status' => $this->status,
        ];
    }
}

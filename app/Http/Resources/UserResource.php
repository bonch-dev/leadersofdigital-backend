<?php

namespace App\Http\Resources;

use App\SocialAccount;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class UserResource
 * @package App\Http\Resources
 *
 * @mixin User
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var SocialAccount $vk */
        $vk = $this
            ->social_accounts()
            ->where('provider', 'vkontakte')
            ->first();

        $entities = collect([]);

        if ($this->relationLoaded('events')) {
            $entities = UserEntityResource::collection($this->events)
                ->additional([
                    'type' => 'event',
                ]);
        }

        if ($this->relationLoaded('posts')) {
            $entities->merge(
                UserEntityResource::collection($this->posts)
                    ->additional([
                        'type' => 'post',
                    ])
            );
        }

        if ($this->relationLoaded('initatives')) {
            $entities->merge(
                UserEntityResource::collection($this->initatives)
                    ->additional([
                        'type' => 'initative',
                    ])
            );
        }

        if ($this->relationLoaded('questions')) {
            $entities->merge(
                UserEntityResource::collection($this->questions)
                    ->additional([
                        'type' => 'question',
                    ])
            );
        }

        $entities = $entities->sortByDesc(function ($item, $key) {
            return $item->created_at->unix();
        })->values();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthday_at' => $this->birthday_at,
            'photo' => $this->photo,
            'vk' => $vk ? 'https://vk.com/id' . $vk->provider_user_id : '',
            $this->mergeWhen($this->relationLoaded('subscribers'), [
                'influence' => $this->influence,
            ]),
            'rank' => $this->rank,
            'karma' => $this->karma,
            'entities' => $entities,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

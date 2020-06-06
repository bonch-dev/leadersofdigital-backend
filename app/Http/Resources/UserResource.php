<?php

namespace App\Http\Resources;

use App\SocialAccount;
use App\User;
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

        return [
            'name' => $this->name,
            'birthday_at' => $this->birthday_at,
            'photo' => '',
            'vk' => 'https://vk.com/id' . $vk->provider_user_id,
            'influence' => $this->influence,
            'rank' => $this->rank,
            'karma' => $this->karma,
        ];
    }
}

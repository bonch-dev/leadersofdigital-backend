<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Optix\Media\Models\Media;

/**
 * Class MediaResource
 * @package App\Http\Resources
 * @mixin Media
 */
class MediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'url' => $this->getUrl()
        ];
    }
}

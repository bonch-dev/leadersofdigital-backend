<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class UserEntityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $type = Str::lower(
            Str::substr(
                get_class($this->resource),
                4
            )
        );

        return [
            'id' => $this->id,
            'type' => $type,
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description,
            'karma' => $this->total_karma ?? 0,
            'rate' => $this->rate ?? 0,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

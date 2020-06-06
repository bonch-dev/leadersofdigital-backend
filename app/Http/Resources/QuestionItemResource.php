<?php

namespace App\Http\Resources;

use App\QuestionItem;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class QuestionItemResource
 * @package App\Http\Resources
 * @mixin QuestionItem
 */
class QuestionItemResource extends JsonResource
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
            'text' => $this->text,
            'votes_count' => $this->votes_count,
            'votes_sum' => $this->votes_sum,
        ];
    }
}

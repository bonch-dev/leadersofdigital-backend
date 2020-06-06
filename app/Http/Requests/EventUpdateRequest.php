<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string Title of event. Example: My cool event
 * @bodyParam description string Description of event. Example: We will eat bubblegum
 * @bodyParam place string Place address or name of evenet. Example: Moscow City
 *
 * @bodyParam photos array Array of used uploaded photos.
 * @bodyParam photos.* int Id of uploaded photo.
 *
 * Class EventUpdateRequest
 * @package App\Http\Requests
 */
class EventUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string',
            'description' => 'string',
            'phone' => 'string',
            'place' => 'string',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

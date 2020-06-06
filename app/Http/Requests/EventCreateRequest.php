<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required Title of event. Example: My cool event
 * @bodyParam description string required Description of event. Example: We will eat bubblegum
 * @bodyParam place string Place address or name of evenet. Example: Moscow City
 *
 * @bodyParam photos array Array of used uploaded photos.
 * @bodyParam photos.* int Id of uploaded photo.
 *
 * Class EventCreateRequest
 * @package App\Http\Requests
 */
class EventCreateRequest extends FormRequest
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
            'name' => 'string|required',
            'description' => 'string|required',
            'phone' => 'string|required',
            'place' => 'string',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

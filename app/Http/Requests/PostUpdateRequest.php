<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string Title of post. Example: My cool post
 * @bodyParam text string Text of post. Example: I eating bubblegum
 *
 * @bodyParam photos array Array of used uploaded photos. No-example
 * @bodyParam photos.* int Id of uploaded photo. No-example
 *
 * Class PostUpdateRequest
 * @package App\Http\Requests
 */
class PostUpdateRequest extends FormRequest
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
            'text' => 'string',
            'title' => 'string',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

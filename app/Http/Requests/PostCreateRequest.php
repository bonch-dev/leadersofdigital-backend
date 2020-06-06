<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required Title of post. Example: My cool post
 * @bodyParam text string required Text of post. Example: I eating bubblegum
 *
 * @bodyParam photos array Array of used uploaded photos. No-example
 * @bodyParam photos.* int Id of uploaded photo. No-example
 *
 * Class PostCreateRequest
 * @package App\Http\Requests
 */
class PostCreateRequest extends FormRequest
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
            'text' => 'string|required',
            'title' => 'string|required',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

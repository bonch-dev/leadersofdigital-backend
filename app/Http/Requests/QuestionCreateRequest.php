<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required Title of event. Example: My cool event
 * @bodyParam description string required Description of event. Example: We will eat bubblegum
 * @bodyParam end_at date Date, when question will end. Example: 2020-06-08 20:20:00
 *
 * @bodyParam items array Array of items of questions.
 * @bodyParam items.*.text string Text of item question. Example: Goot text
 * @bodyParam photos array Array of used uploaded photos. No-example
 * @bodyParam photos.* int Id of uploaded photo. No-example
 *
 * Class QuestionCreateRequest
 * @package App\Http\Requests
 */
class QuestionCreateRequest extends FormRequest
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
            'title' => 'string|required',
            'description' => 'string|required',
            'end_at' => 'date|required',

            'items' => 'array|required',
            'items.*.text' => 'string|required',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

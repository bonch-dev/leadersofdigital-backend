<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam question_item_id int required QuestionItem for we vote. Example: 1
 *
 * Class QuestionAnswerRequest
 * @package App\Http\Requests
 * @property int question_item_id
 */
class QuestionAnswerRequest extends FormRequest
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
            'question_item_id' => 'exists:question_items,id|required'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required Title of initiative. Example: My cool initiative
 * @bodyParam description string required Description of initiative. Example: All need to eat bubblegums!
 * @bodyParam video_url string required Url to youtube.com of video. Example: https://www.youtube.com/watch?v=Qzw6A2WC5Qo
 * @bodyParam objective string required Objective of initiative. Example: Bubblegums for everyone
 * @bodyParam goals string required Goals of initiative. Example: Give bubblegum to me, to you and to bonch.dev
 * @bodyParam geography string required Geography of your initiative. Example: whole world
 * @bodyParam result string required Result when initiative end's. Example: bonch.dev lopnet
 * @bodyParam additional string Some comments of initiative. Example: Why I need to comment it?
 *
 * @bodyParam photos array Array of used uploaded photos. No-example
 * @bodyParam photos.* int Id of uploaded photo. No-example
 *
 * Class InitiativeCreateRequest
 * @package App\Http\Requests
 */
class InitiativeCreateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'required|string',
            'video_url' => 'required|string',
            'objective' => 'required|string',
            'goals' => 'required|string',
            'geography' => 'required|string',
            'result' => 'required|string',
            'additional' => 'string',

            'photos' => 'array',
            'photos.*' => 'exists:media,id'
        ];
    }
}

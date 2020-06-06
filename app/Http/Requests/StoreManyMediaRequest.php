<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam files array required Array of files (images) what need to be uploaded to server. No-example
 * @bodyParam files.* image required Image need to be upload to server. No-example
 *
 * Class StoreMediaRequest
 * @package App\Http\Requests
 * @property array $files
 */
class StoreManyMediaRequest extends FormRequest
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
            'files' => 'required|array',
            'files.*' => 'mimetypes:image/jpeg,image/png'
        ];
    }
}

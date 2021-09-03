<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
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
            'title' => 'nullable|min:10',
            'image' => 'nullable|mimes:jpg,jpeg,gif,png,svg',
            'description' => 'nullable|min:11',
            'source' => 'nullable|string'
        ];
    }
}

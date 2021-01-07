<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class levelCreateArticleRequest extends FormRequest
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
            'id'=>'required|max:6',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            "id.required" => "ID 為必填",
            "description.required" => "描述 為必填",

        ];
    }
}

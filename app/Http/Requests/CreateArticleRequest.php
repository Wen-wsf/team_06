<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'year'=>'required',
            'id'=>'required|max:6',
            'name'=>'required',
            'arrived'=>'required',
            'powerLV'=>'required',
            'level'=>'required',

        ];
    }
    public function messages()
    {
        return [
            "year.required" => "颱風名稱 為必填",
            "year.min" => "颱風名稱 至少需2個字元",
            "id.required" => "ID 為必填",
            "id.max" => "ID 至少需6個字元",
            "name.required" => "名子 為必填",
            "arrived.required" => "抵達 為必填",
            "powerLV.required" => "颱風強度 為必填",
            "level.required" => "警報發布級數 為必填",

            //"description.between" => "描述 介於2-3",
        ];
    }
}

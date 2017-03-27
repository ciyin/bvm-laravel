<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreType extends FormRequest
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
            'book_type'=>'required|string|unique:book_types,book_type'
        ];
    }

    public function messages()
    {
        return [
            'book_type.required'=>'教材分类不能为空',
            'book_type.string'=>'教材分类必须为字符串',
            'book_type.unique'=>'该分类名称已存在',
        ];
    }
}

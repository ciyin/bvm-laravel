<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExam extends FormRequest
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
            'exam_type'=>'bail|required|string|unique:exam_types,exam_type',
            'subject'=>'bail|required|string',
        ];
    }

    public function messages()
    {
        return [
            'exam_type.required'=>'考试类型不能为空',
            'exam_type.string'=>'考试类型必须为字符串',
            'exam_type.unique'=>'该考试名称已存在',
            'subject.required'=>'科目不能为空',
            'subject.string'=>'科目必须为字符串',

        ];
    }
}

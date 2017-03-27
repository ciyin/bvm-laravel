<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBook extends FormRequest
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
            'exam_type'=>'required',
            'book_type'=>'required',
            'using_type'=>'required',
            'status'=>'required',
            'contents'=>'required|string',
            'using_instruction'=>'bail|required|string',
            'subject_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'exam_type.required'=>'考试类型不能为空',
            'book_type.required'=>'教材分类不能为空',
            'using_type.required'=>'使用分类不能为空',
            'status.required'=>'状态不能为空',
            'contents.required'=>'内容简介不能为空',
            'contents.string'=>'内容简介必须为字符串',
            'using_instruction.required'=>'使用说明不能为空',
            'using_instruction.string'=>'使用说明必须为字符串',
            'subject_id.required'=>'考试科目不能为空',
        ];
    }
}

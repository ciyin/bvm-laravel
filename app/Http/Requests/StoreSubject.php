<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubject extends FormRequest
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
            'subject'=>'bail|required|string',
        ];
    }

    public function messages()
    {
        return [
            'subject.required'=>'科目不能为空',
            'subject.string'=>'科目必须为字符串',
        ];
    }
}

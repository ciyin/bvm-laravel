<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRole extends FormRequest
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
            'role'=>'required|string|unique:roles,role',
        ];
    }

    public function messages()
    {
        return [
            'role.required'=>'角色不能为空',
            'role.string'=>'角色必须为字符串',
            'role.unique'=>'该角色名称已存在',
        ];
    }
}

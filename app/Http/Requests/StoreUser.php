<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name'=>'bail|required|string',
            'email'=>'bail|required|unique:users,email|email',
            'password'=>'bail|required|string|min:6',
            'role'=>'required|integer',
            'city'=>'required|string',
            'status'=>'required',
        ];
    }

   public function messages()
   {
       return [
           'name.required'=>'姓名不能为空',
           'name.string'=>'姓名必须为字符串',
           'email.required'=>'邮箱不能为空',
           'email.unique'=>'该邮箱地址已存在',
           'email.email'=>'无效邮箱地址',
           'password.required'=>'密码不能为空',
           'password.string'=>'密码必须为字符串',
           'password.min'=>'密码不能少于6位字符',
           'role.required'=>'角色不能为空',
           'city.required'=>'城市不能为空',
           'status.required'=>'状态不能为空',
       ];
   }
}

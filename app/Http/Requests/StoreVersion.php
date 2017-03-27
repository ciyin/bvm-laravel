<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVersion extends FormRequest
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
            'version'=>'bail|required|string',
            'update_reason'=>'bail|required|string',
            'cover'=>'image',
        ];
    }

    public function messages()
    {
        return [
            'version.required' => '版本号不能为空',
            'version.string' => '版本号必须为字符串',
            'update_reason.required' => '改版说明不能为空',
            'update_reason.string' => '改版说明必须为字符串',
            'cover.image' => '文件必须为图片格式，如jpeg,png,bmp,gif,svg等'
        ];
    }
}

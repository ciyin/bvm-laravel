<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttachment extends FormRequest
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
            'attachment'=>'required|file',
            'is_general'=>'required',
            'note'=>'string',
        ];
    }

    public function messages()
    {
        return [
            'attachment.required'=>'未添加附件',
            'attachment.file'=>'文件未成功上传',
            'is_general.required'=>'适用类型不能为空',
            'note.string'=>'备注必须为字符串',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'book'=>'required|string|unique:books,book',
            'exam_type'=>'required',
            'book_type'=>'required',
            'status'=>'required',
            'contents'=>'required|string',
            'using_instruction'=>'required|string',
            'version'=>'required|string',
        ];
    }
}
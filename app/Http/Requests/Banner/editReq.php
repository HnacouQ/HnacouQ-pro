<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class editReq extends FormRequest
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
            //
            'name' => 'required',
            'type' => 'required|numeric',
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Tên banner không được để trống!!',
            'type.required' => 'Loại banner không được để trống',
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!',
        ];
    }
}

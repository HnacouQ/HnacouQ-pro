<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class addReq extends FormRequest
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
            'name' => 'required|unique:category,name',
            'slug' => 'required|unique:category,slug',

        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên danh mục không được để trống!!!',
            'name.unique' => 'danh mục đã tồn tại!!!',
            'slug.required' => 'slug không được để trống!!!',
            'slug.unique' => 'slug đã tồn tại!!!',
        ];
    }
}

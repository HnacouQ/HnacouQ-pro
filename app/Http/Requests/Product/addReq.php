<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|unique:product,name',
            'slug' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric|lt:price',
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    // public function messages(){
    //     return [
    //         'name.required' => 'tên sản phẩm không được để trống!!',
    //         'name.unique' => 'tên sản phẩm đã tồn tại!!',
    //         'slug.required' => 'slug không được để trống!!',
    //         'content.required' => 'Mô tả không được để trống!!',
    //         'category_id.required' => 'tên danh mục không được để trống!!',
    //         'price.required' => 'Giá sản phẩm không được để trống!!',
    //         'price.numeric' => 'Bạn nhập sai định dạng.',
    //         'sale_price.required' => 'Giá khuyến mãi không được để trống!!',
    //         'sale_price.numeric' => 'Bạn nhập sai định dạng.',
    //         'sale_price.lt' => 'Giá khuyến mãi không được lớn hơn giá gốc',
    //         'upload.required' => 'Ảnh Không Được Để Trống!',
    //         'upload.image' => 'File tải lên không phải định dạng ảnh!',
    //         'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
    //         'upload.max' => 'File tải lên không đc quá 2MB!',
    //     ];
    // }
}

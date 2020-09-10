<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class Regis extends FormRequest
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
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email|unique:customer,email',
            'password' => 'required',
        ];
    }

    // public function messages(){
    //     return [
    //         'name.required' => 'Không được để trống...',
    //         'phone.required' => 'Không được để trống...',
    //         'phone.numeric' => 'số điện thoại sai định dạng',
    //         'address.required' => 'Không được để trống...',
    //         'email.required' => 'Không được để trống...',
    //         'email.email' => 'Email chưa đúng định dạng...@gmail.com',
    //         'email.unique' => 'email này đã tồn tại..',
    //         'password.required' => 'Không được để trống...',
    //     ];
    // }
}

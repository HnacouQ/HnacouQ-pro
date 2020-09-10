<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class login extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    // public function messages(){
    //     return [
    //         'email.required' => 'Email không được để trống!!',
    //         'email.email' => 'Email không đúng định dạng!!',
    //         'password.required' => 'password không được để trống!!',
    //     ];
    // }
}

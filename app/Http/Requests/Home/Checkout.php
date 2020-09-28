<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;


class Checkout extends FormRequest
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
            'name' => 'required|min:6|max:20',
            'phone' => 'required|min:10|numeric|phone_number',
            'email' => 'required|email',
            'address' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'phone.phone_number' => 'You entered the wrong format phone number!!'

        ];
    }
}

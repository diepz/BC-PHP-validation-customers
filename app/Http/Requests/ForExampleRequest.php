<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForExampleRequest extends FormRequest
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
            'name' => 'required|min:2|max:30|',
            'dob' => 'required|date',
            'email' => 'required|email',

        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'Mày nhập full tên cho tao! ÓC',
            'name.min' => 'Giới hạn là 2 DKM',
            'name.max' => ' Tối đã là 30 ký tự',
            'dob.required' => 'Tao cần ngày mày tạo',
            'dob.date' => 'Ngày tạo là bao nhiêu?',
            'email.required' => 'Nhập email của m vào?',
            'email.min' => 'Email của mày tối da là 19 ký tự!',
        ];



    }
}

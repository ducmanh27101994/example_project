<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormCreateAccount extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'full_name' => 'required',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            "email.required" => 'Email không được để trống',
            "email.email" => "Email không đúng định dạng",
            "email.unique" => 'Email đã tồn tại',
            "full_name.required" => "Họ tên không được để trống",
            "password.required" => "Password không được để trống",
            "password.min" => "Password phải lớn hơn 8 ký tự",
            "password.confirmed" => "Mật khẩu nhập không khớp",

        ];

    }
}

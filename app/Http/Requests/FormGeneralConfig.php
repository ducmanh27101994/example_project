<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormGeneralConfig extends FormRequest
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
            'company_phone' => 'numeric|digits:10',
            'company_email' => 'email',
        ];
    }

    public function messages()
    {
        return [
            'company_phone.numeric' => 'Số điện thoại không đúng định dạng',
            'company_phone.digits' => 'Số điện thoại không đúng định dạng',
            'company_email.email' => 'Email không đúng định dạng',
        ];

    }
}

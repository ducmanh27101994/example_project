<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormAddMenu extends FormRequest
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
            'menu_title' => 'required',
            'menu_router' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "menu_title.required" => 'Tiêu đề menu không được để trống',
            "menu_router.required" => 'Link menu không được để trống',
        ];

    }
}

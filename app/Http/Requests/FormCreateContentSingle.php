<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormCreateContentSingle extends FormRequest
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
            'title' => 'required',
            'location' => 'required|unique:independent_content',
            'link' => 'required|unique:independent_content',
        ];
    }

    public function messages()
    {
        return [
            "title.required" => 'Tiêu đề không được để trống',
            "location.required" => 'Tên định danh không được để trống',
            "location.unique" => 'Tên định danh đã tồn tại',
            "link.required" => 'Link liên kết không được để trống',
            "link.unique" => 'Link liên kết đã tồn tại',
        ];

    }
}

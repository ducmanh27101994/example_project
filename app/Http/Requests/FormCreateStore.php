<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormCreateStore extends FormRequest
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
            'title_store' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',

        ];
    }

    public function messages()
    {
        return [
            "title_store.required" => 'Tiêu đề không được để trống',
            "latitude.required" => 'Tọa độ latitude không được để trống',
            "longitude.required" => 'Tọa độ longitude không được để trống',
        ];

    }
}

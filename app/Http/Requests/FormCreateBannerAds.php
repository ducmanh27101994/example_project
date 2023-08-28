<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormCreateBannerAds extends FormRequest
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
            'code_ads' => 'required|unique:banner_ads',

        ];
    }

    public function messages()
    {
        return [
            "title.required" => 'Tiêu đề không được để trống',
            "code_ads.required" => 'Mã banner ads không được để trống',
            "code_ads.unique" => 'Mã banner ads đã tồn tại',
        ];

    }
}

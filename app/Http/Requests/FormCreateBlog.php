<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FormCreateBlog extends FormRequest
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
            'news_headlines' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            "news_headlines.required" => 'Tiêu đề không được để trống',
            "category_id.required" => 'Cần tạo danh mục để tạo bài viết',
        ];

    }
}

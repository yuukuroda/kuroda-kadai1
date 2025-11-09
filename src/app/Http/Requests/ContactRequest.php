<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => ['required','string','max8'],
            'first_name' => ['required', 'string', 'max8'],
            'email' => ['required','email'],
            'tel_1' => ['required','integer','max:5'],
            'tel_2' => ['required', 'integer', 'max:5'],
            'tel_3' => ['required', 'integer', 'max:5'],
            'address' => ['required'],
            'category_id' => ['required', ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'カテゴリを入力してください',
            'name.string' => 'カテゴリを文字列で入力してください',
            'name.max' => 'カテゴリを10文字以下で入力してください',
            'name.unique' => 'カテゴリが既に存在しています'
        ];
    }
}

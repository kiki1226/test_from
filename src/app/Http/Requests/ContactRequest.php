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
            'first_name' => 'required|string|max:10',
            'last_name' => 'required|string|max:10',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|max:255',
            'tel_area' => 'required|string|max:5',
            'tel_local' => 'required|string|max:5',
            'tel_number' => 'required|string|max:5',
            'address' => 'required|string|max:255',
            'content' => 'required|string',
            'inquiry_type' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください。',
            'first_name.string' => '姓は文字列で入力してください。',
            'last_name.required' => '名を入力してください。',
            'last_name.string' => '名は文字列で入力してください。',
            'gender.required' => '性別を選択してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => '有効なメールアドレスを入力してください。',
            'tel_area.required' => '電話番号を入力してください。',
            'tel_area.max' => '電話番号は5文字以内で入力してください。',
            'tel_local.required' => '電話番号を入力してください。',
            'tel_local.max' => '電話番号は5文字以内で入力してください。',
            'tel_number.required' => '電話番号を入力してください。',
            'tel_number.max' => '電話番号は5文字以内で入力してください。',
            'address.required' => '住所を入力してください。',
            'address.max' => '住所は255文字以内で入力してください。',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください。',
            'content.required' => 'お問い合わせ内容を入力してください。',
            'content.string' => 'お問い合わせ内容は文字列で入力してください。',
            
        ];
    }
}

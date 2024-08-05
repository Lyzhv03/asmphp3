<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname'   => ['required','min:5'],
            'username'   => ['required','min:5'],
            'email'   => ['required','email'],
            'avatar'   => ['nullable','image'],
            'password' => ['required','min:3'],
        ];
    }

    public function messages(){
        return [
            'fullname.required' => "Full name không được bỏ trống ",
            'fullname.min' => "Full name phải ít nhất 5 ký tự trở lên ",
            'username.required' => "Username không được bỏ trống ",
            'username.min' => "Username phải ít nhất 5 ký tự trở lên ",
            'email.required' => "Email không được bỏ trống ",
            'email.email' => "Email không phải kiểu email ",
            'avatar.image' => "File không phải kiểu ảnh",
            'password.required' => "Password không được bỏ trống ",
            'password.min' => "Password phải ít nhất 3 ký tự trở lên ",
        ];
    }

}

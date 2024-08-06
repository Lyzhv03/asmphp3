<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
            'title'         => ['required','min:5'],
            'publisher'     => ['required','min:5'],
            'publication'   => ['required','date'],
            'thumbnail'     => ['nullable','image'],
            'price'         => ['required','integer'],
            'quantity'      => ['required','integer'],
            'Author'        => ['required','min:5'],
        ];
    }

    public function messages(){
        return [
            'title.required'       => "Không được để trống",
            'title.min'            => "Tối thiểu 5 ký tự",
            'publisher.required'   => "Không được để trống",
            'publisher.min'        => "Tối thiểu 5 ký tự",
            'publication.required' => "Không được để trống",
            'publication.date'     => "Không đúng định dạng",
            'price.required'       => "Không được để trống",
            'price.integer'        => "Không đúng định dạng",
            'quantity.required'    => "Không được để trống",
            'quantity.integer'     => "Không đúng định dạng",
            'author.required'      => "Không được để trống",
            'author.min'           => "Tối thiểu 5 ký tự",
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required|min:2|max:50',
            'author'=>'required|min:2|max:50',
            'cover'=>'required|image|mimes:jpeg,jpg,png,webp',
            'plot'=>'required|min:10|max:1000',
        ];
    }

    public function messages(){
        return[
            'required'=>'il campo :attribute è obbligatorio',
            'min'=>':attribute deve essere minimo di :min caratteri',
            'max'=>':attribute deve essere massimo di :max caratteri',
            'image'=> 'il file deve essere un\'immagine',
        ];
    }
}

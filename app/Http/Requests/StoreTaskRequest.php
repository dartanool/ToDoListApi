<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     ** Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'status' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле заголовок обязательно для заполнения',
            'title.string' => 'Поле заголовок должно быть строкой',
            'title.max' => 'Поле заголовок не должно превышать 255 символов',
            'description.required' => 'Поле описание обязательно для заполнения',
            'description.string' => 'Поле описание должно быть строкой',
            'description.max' => 'Поле описание не должно превышать 1000 символов',
        ];
    }
}

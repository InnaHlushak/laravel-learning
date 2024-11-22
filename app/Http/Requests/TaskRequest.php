<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
        //логіка ВАЛІДАЦІЇ форми
        return [             
            'name'=> 'required|min:3',
            'description'=> 'required|min:5|max:255',
            'category_id' => ['required','exists:categories,id'],
            'deadline' => 'required|date|after:now',
            'cost' => 'nullable|numeric|decimal:2|min:0'
    ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     */
    public function messages(): array
    {
        //Налаштування повідомлень про помилки
        return [
            'name.required' => 'Це поле обов`язкове для заповнення',
            'category_id.exists' => 'Такої категорії не існує',
        ];
    }
}

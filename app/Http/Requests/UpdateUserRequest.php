<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'required|string|max:50|unique:users,id'.$this->user->id,
            'user_name' => 'required|string|max:100',
            'email' => 'required|string|max:250',
            'password' => 'required|string|max:250',
            'accesToken' => 'nullable|string'
        ];
    }
}

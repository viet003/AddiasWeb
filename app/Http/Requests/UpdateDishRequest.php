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
            'code' => 'required|string|max:50|unique:dishes,code'.$this->dish->id,
            'name' => 'required|string|max:250',
            'tag' => 'required|string|max:250',
            'ingredients' => 'required|string|max:250',
            'description' => 'nullable|string'
        ];
    }
}

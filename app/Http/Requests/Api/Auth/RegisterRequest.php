<?php

namespace App\Http\Requests\Api\Auth;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fio' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', new Phone],
            'city_id' => ['required', 'integer', 'exists:cities,id'],
            'password' => ['required', 'confirmed', 'string', 'between:5,32'],
        ];
    }
}

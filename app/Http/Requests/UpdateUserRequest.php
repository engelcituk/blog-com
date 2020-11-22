<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        $rules = [
            'name'=>'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore( $this->route('user')->id)
            ]
        ];
        // si campo password viene lleno, se añade al array de reglas este campo
        if ($this->filled('password')) {
           $rules['password'] = ['confirmed','min:6'];
        }
        return $rules;
    }
}

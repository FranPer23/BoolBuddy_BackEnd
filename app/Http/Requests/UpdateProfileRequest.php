<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'address' => 'nullable|max:255',
            'city' => 'nullable|max:255',
            'photo' => 'nullable|image|max:2048',
            'mobile' => 'nullable|unique:profiles|max:255',
            'phone' => 'nullable|max:255',
            'cv' => 'nullable|max:255',
            'field' => 'nullable|max:255',
            'service' => 'nullable|max:255',

        ];
    }
}

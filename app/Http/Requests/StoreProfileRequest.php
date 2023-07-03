<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProfileRequest extends FormRequest
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
            'mobile' => 'required|unique:profiles|max:255',
            'phone' => 'nullable|max:255',
            'cv' => 'nullable|max:255',
            // 'slug' => 'required|max:255',
            'field' => 'required|max:255',
            'service' => 'required|max:255',
            // 'user_id' => ['required', 'exists:users,id']
        ];
    }
}

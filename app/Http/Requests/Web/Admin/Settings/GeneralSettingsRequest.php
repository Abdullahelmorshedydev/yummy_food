<?php

namespace App\Http\Requests\Web\Admin\Settings;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingsRequest extends FormRequest
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
            'site_name' => 'required|string|min:3',
            'phone' => 'required|numeric|min:9',
            'email' => 'required|email',
            'location' => 'required|string',
            'opening_hours_1' => 'required|string',
            'opening_hours_2' => 'required|string',
            'opening_hours_3' => 'required|string',
            'opening_hours_4' => 'required|string',
            'about_us' => 'required|string',
            'address' => 'required|string',
            'contact_phone' => 'required|numeric|min:9',
            'contact_email' => 'required|email',
        ];
    }
}

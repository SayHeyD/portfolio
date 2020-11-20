<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email:spoof,dns,rfc'],
            'message' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Please enter a Name",
            'email.required' => "Please enter a E-Mail",
            'email.email' => "Please enter a valid E-Mail",
            'message.required' => "Please enter a message",
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'email' => ['required', 'email:spoof,dns,rfc'],
            'message' => ['required'],
            'check' => [Rule::in([null])],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Please enter a name",
            'email.required' => "Please enter a e-mail",
            'email.email' => "Please enter a valid e-mail",
            'message.required' => "Please enter a message",
        ];
    }
}

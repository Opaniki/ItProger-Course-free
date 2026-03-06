<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:2|max:50',
            'email' => ['required', 'min:5', 'max:100', 'email',], 
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => "Please enter your name",
            'email.required' => "Please enter your email",
            'subject.required' => "Please enter a subject",
            'message.required' => "Please enter a message",
            'name.min' => "Name must be at least 2 characters long",
            
        ];
    }

}

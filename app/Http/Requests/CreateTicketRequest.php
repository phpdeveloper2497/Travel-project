<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTicketRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'last_name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'nullable',
                'email',
                'max:254'
            ],
            'phone' => [
                'nullable',
                'phone:uz'
            ],
            'message' => [
                'required',
                'max:1024',
                'string'
            ],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

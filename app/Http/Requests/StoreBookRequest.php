<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'tour_id' => 'required|integer',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'comment' => 'nullable',
        ];
    }
}

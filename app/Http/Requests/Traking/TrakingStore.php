<?php

namespace App\Http\Requests\Traking;

use Illuminate\Foundation\Http\FormRequest;

class TrakingStore extends FormRequest
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
            'request_id' => 'required|exists:requests,id',
            'updated_by' => 'required|exists:users,id',
            'request_status_id' => 'required|exists:request_statuses,id',
            'comment' => 'required|max:500',
        ];
    }
}

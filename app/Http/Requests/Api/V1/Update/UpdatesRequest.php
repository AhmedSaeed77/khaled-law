<?php

namespace App\Http\Requests\Api\V1\Update;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatesRequest extends FormRequest
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
            'order_id' => ['required', Rule::exists('orders','id')],
            'title' => ['required', 'string','max:255'],
            'description' => ['nullable', 'string'],
            'date' => ['required', 'date'],
        ];
    }
}

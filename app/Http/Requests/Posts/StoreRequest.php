<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'user_id' => '',
            'title' => 'required|string|min:2',
            'body' => 'required|string|max:1024'
        ];
    }
}

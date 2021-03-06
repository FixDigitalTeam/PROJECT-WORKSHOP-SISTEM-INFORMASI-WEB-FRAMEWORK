<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:100',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Content title cannot be empty',
            'content.required' => 'Content cannot be empty',
            'title.max' => 'Content title must not be greater than 100 character'
        ];
    }
}

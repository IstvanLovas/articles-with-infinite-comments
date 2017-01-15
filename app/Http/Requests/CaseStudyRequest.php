<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseStudyRequest extends FormRequest
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
            'name' => 'required|min:3',
            'header' => 'required|min:5',
            'intro' => 'required|min:5',
            'fact' => 'required|min:5',
            'text_left' => 'required|min:5',
            'text_right' => 'required|min:5',
            'active' => 'required'
        ];
    }
}

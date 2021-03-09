<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:100|string',
            'desc' => 'required',
            'tag_id' => 'required|exists:tags,id',
            'user_id' => 'required'
        ];

        if ($this->getMethod() == "POST") {
            $rules += ['image' => 'required|image|mimes:png,jpg,gif'];
        }

        if ($this->getMethod() == "PUT") {
            $rules += ['image' => 'nullable|image|mimes:png,jpg,gif'];
        }

        return $rules;
    }
}

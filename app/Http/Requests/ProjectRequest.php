<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        if($this->getMethod() === 'POST'){
            return [
                'title' => 'required|string|max:100',
                'desc' => 'required|string|max:400',
                'content'=>'required|string',
                'user_id' => 'required',
                'url' => 'nullable'
            ];
        }

        if($this->getMethod() === 'PUT'){
            return [
                'title' => 'required|string|max:100',
                'desc' => 'required|string|max:400',
                'content'=>'required|string',
                'user_id' => 'required',
                'url' => 'nullable'
            ];
        }
    }
}

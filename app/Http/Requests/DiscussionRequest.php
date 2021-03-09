<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscussionRequest extends FormRequest
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
                'content' => 'required',
                'user_id' => 'required',
                'topic_id' => 'required',
            ];
        }

        if($this->getMethod() === 'PUT'){
            return [
                'title' => 'required|string|max:100',
                'content' => 'required',
                'user_id' => 'required',
                'topic_id' => 'required',
            ];
        }
    }
}

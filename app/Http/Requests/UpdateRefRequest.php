<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRefRequest extends FormRequest
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
            'title' => 'required|max:200',
            'user_id' => 'required',
            'lec_link' => 'required',
            'book_name' => 'required',
            'book_link' => 'required',
            'video_name' => 'required',
            'video_link' => 'required',
            'question_lec' => 'required',
            'question_lec_link' => 'required',
            'level' => 'required',
            'dept' => 'required',
            'semester' => 'required',
        ];
    }
}

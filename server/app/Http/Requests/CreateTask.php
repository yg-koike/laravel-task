<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTask extends FormRequest
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
            'title' => 'required|max:100',
            'due_date' => 'required|date_format:Y/m/d H:i',
            'time' => 'required|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'due_date' => '期限日',
            'time' => '視聴時間',
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}

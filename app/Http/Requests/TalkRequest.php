<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TalkRequest extends Request
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
            'title' => 'required|max:50',
            'category' => 'required|integer',
            'price' => 'required|integer',
            'detail' => 'required|max:1000',
            'time' => 'required|integer',
            'pic0' => 'mimes:jpeg,png|max:5120',
            'pic1' => 'mimes:jpeg,png|max:5120',
        ];
    }
}

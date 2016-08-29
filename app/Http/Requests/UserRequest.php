<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
          'name' => 'required|string|max:20',
          'place' => 'string|max:5120',
          'introduction' => 'string|max:5120',
          'vision' => 'string|max:5120',
          'current_job' => 'string|max:5120',
          'current_position' => 'string|max:5120',
          'current_detail' => 'string|max:5120',
          'past_job' => 'string|max:5120',
          'past_position' => 'string|max:5120',
          'past_detail' => 'string|max:5120',
          'latest_school' => 'string|max:5120',
          'latest_major' => 'string|max:5120',
          'latest_school_period' => 'string|max:5120',
          'other_school' => 'string|max:5120',
          'other_major' => 'string|max:5120',
          'other_school_period' => 'string|max:5120',
          'pic3' => 'mimes:jpeg,png|max:5120',
        ];
    }
}

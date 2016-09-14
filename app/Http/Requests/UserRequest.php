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
          'lastname' => 'required|string|max:20',
          'firstname' => 'required|string|max:20',
          'place' => 'string|max:50',
          'introduction' => 'string|max:1000',
          'vision' => 'string|max:1000',
          'others' => 'string|max:1000',
          'current_job' => 'string|max:50',
          'current_position' => 'string|max:50',
          'current_detail' => 'string|max:1000',
          'current_period' => 'string|max:50',
          'past_job' => 'string|max:50',
          'past_position' => 'string|max:50',
          'past_detail' => 'string|max:1000',
          'past_period' => 'string|max:50',
          'latest_school' => 'string|max:50',
          'latest_major' => 'string|max:50',
          'latest_school_period' => 'string|max:50',
          'other_school' => 'string|max:50',
          'other_major' => 'string|max:50',
          'other_school_period' => 'string|max:50',
          'pic3' => 'mimes:jpeg,png|max:5120',
        ];
    }
}

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
          'place' => 'string|max:255',
          'introduction' => 'string|max:255',
          'vision' => 'string|max:255',
          'current_job' => 'string|max:255',
          'current_position' => 'string|max:255',
          'current_detail' => 'string|max:255',
          'past_job' => 'string|max:255',
          'past_position' => 'string|max:255',
          'past_detail' => 'string|max:255',
          'latest_school' => 'string|max:255',
          'latest_major' => 'string|max:255',
          'latest_school_period' => 'string|max:255',
          'other_school' => 'string|max:255',
          'other_major' => 'string|max:255',
          'other_school_period' => 'string|max:255',
          'pic3' => 'mimes:jpeg,png|max:5120',
        ];
    }
}

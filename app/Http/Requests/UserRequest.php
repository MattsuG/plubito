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
          'name' => 'required|string|max:20',
          'place' => 'string',
          'introduction' => 'string',
          'vision' => 'string',
          'current_job' => 'string',
          'current_position' => 'string',
          'current_detail' => 'string',
          'past_job' => 'string',
          'past_position' => 'string',
          'past_detail' => 'string',
          'latest_school' => 'string',
          'latest_major' => 'string',
          'latest_school_period' => 'string',
          'other_school' => 'string',
          'other_major' => 'string',
          'other_school_period' => 'string',
          'pic3' => 'mimes:jpeg,png|max:5120',
        ];
    }
}

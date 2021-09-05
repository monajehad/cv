<?php

namespace App\Http\Requests\User\Course;

use Faker\Core\Number;
use Illuminate\Foundation\Http\FormRequest;


class SaveCourseRequest extends FormRequest
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
            'name' => 'required|string|max:200|min:3',
            'hours' => 'required|integer',
            'source' => 'required|string|max:200|min:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'details' => 'nullable|string|max:500|min:50',
        ];



        return $rules;

    }
}

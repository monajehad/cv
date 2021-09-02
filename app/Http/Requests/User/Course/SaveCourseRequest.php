<?php

namespace App\Http\Requests\User\Course;


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
            'source' => 'required|string|max:200|min:50',
            'hours' => 'required',
            'date' => 'required',
            'details' => 'nullable|string|max:500|min:50',
        ];



        return $rules;

    }
}

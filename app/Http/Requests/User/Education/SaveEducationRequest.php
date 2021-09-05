<?php

namespace App\Http\Requests\User\Education;


use Illuminate\Foundation\Http\FormRequest;


class SaveEducationRequest extends FormRequest
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
            'place_name'     => 'required|string|max:200|min:3' ,
            'specialization' => 'required|string|max:200|min:3' ,
            'degree'         => 'required' ,
            'date'           => 'required' ,
            'details'        => 'nullable|string|max:500|min:50' ,
        ];


        return $rules;

    }
}

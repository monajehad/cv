<?php

namespace App\Http\Requests\User\People;


use Illuminate\Foundation\Http\FormRequest;


class SavePeopleRequest extends FormRequest
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
            'name'              => 'required|string|max:150|min:3' ,
            'email'             => 'required|string|max:200|min:10' ,
            'gender'            => 'required' ,
            'mobile'            => 'required|string|max:25|min:8' ,
            'birthday'          => 'required',
            'nationality'       => 'required|max:25|min:3' ,
            'marital'           => 'required' ,
            'language'          => 'required|max:10' ,
            'details'           => 'nullable|string|max:500|min:50' ,
        ];


        return $rules;

    }
}

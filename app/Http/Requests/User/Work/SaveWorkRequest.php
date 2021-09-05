<?php

namespace App\Http\Requests\User\Work;


use Illuminate\Foundation\Http\FormRequest;


class SaveWorkRequest extends FormRequest
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
            'company_name' => 'nullable|string|max:200|min:3',
            'job_title' => 'required|string|max:200|min:3',
            'start_date' => 'required',
            'end_date' => 'required',
            'details' => 'nullable|string|max:500|min:50',
        ];



        return $rules;

    }
}

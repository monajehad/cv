<?php

namespace App\Http\Requests\User\Skill;

use Faker\Core\Number;
use Illuminate\Foundation\Http\FormRequest;


class SaveSkillRequest extends FormRequest
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
            'level' => 'required|integer|min:1|max:100',
           
            
        ];



        return $rules;

    }
}

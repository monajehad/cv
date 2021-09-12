<?php

namespace App\Http\Requests\User\Social;

use Faker\Core\Number;
use Illuminate\Foundation\Http\FormRequest;


class SaveSocialRequest extends FormRequest
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
            'link' => 'required|string|max:200|min:10',
            'social_website_id' => 'required',
        ];



        return $rules;

    }
}

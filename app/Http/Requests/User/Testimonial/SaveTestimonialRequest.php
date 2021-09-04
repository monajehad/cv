<?php

namespace App\Http\Requests\User\Testimonial;

use Faker\Core\Number;
use Illuminate\Foundation\Http\FormRequest;


class SaveTestimonialRequest extends FormRequest
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
            'person_name' => 'required|string|max:200|min:3',
            'person_email' => 'required|string|max:200|min:10',
            'person_mobile' => 'required|string|max:25|min:8',
            'about' => 'required|string|max:500|min:50',
        ];



        return $rules;

    }
}

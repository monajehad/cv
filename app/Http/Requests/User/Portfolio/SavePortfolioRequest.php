<?php

namespace App\Http\Requests\User\Portfolio;

use Faker\Core\Number;
use Illuminate\Foundation\Http\FormRequest;


class SavePortfolioRequest extends FormRequest
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
            'portfolio_name' => 'required|string|max:200|min:3',
            'link' => 'required|string|max:200|min:5',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'details' => 'nullable|string|max:500|min:50',
        ];



        return $rules;

    }
}

<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class EducationCard extends Component
{

    public $education;
    public function __construct($education)
    {
        $this->education = $education;
    }


    public function render()
    {
        return view('components.user.education_card');
    }
}

<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class SocialCard extends Component
{

    public $social;
    public function __construct($social)
    {
        $this->social = $social;
    }


    public function render()
    {
        return view('components.user.social_card');
    }
}

<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class InterestCard extends Component
{

    public $interest;
    public function __construct($interest)
    {
        $this->interest = $interest;
    }


    public function render()
    {
        return view('components.user.interest_card');
    }
}

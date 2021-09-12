<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class WorkCard extends Component
{

    public $work;
    public function __construct($work)
    {
        $this->work = $work;
    }


    public function render()
    {
        return view('components.user.work_card');
    }
}

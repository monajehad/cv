<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class SkillCard extends Component
{

    public $skill;
    public function __construct($skill)
    {
        $this->skill = $skill;
    }


    public function render()
    {
        return view('components.user.skill_card');
    }
}

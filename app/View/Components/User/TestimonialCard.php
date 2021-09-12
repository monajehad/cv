<?php

namespace App\View\Components\User;

use Illuminate\View\Component;

class TestimonialCard extends Component
{

    public $testimonial;
    public function __construct($testimonial)
    {
        $this->testimonial = $testimonial;
    }


    public function render()
    {
        return view('components.user.testimonial_card');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'person_name','person_email','person_mobile',
        'about','is_active','user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function getTestimonialCardAttribute()
    {
        return view('components.user.testimonial_card', [
            'testimonial' => $this,
        ])->render();
    }
   
}

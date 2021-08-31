<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'person_name','person_email','person_mobile','start_date',
        'end_date','about','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

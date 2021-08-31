<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'place_name','specialization','degree','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function getEducationCardAttribute()
    {
        return view('components.user.education_card', [
            'education' => $this,
        ])->render();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','hours','source','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCourseCardAttribute()
    {
        return view('components.user.course_card', [
            'course' => $this,
        ])->render();
    }
   
}

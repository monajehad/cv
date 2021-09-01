<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company_name','job_title','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
    public function getWorkonCardAttribute()
    {
        return view('components.user.work_card', [
            'work' => $this,
        ])->render();
    }
   
}

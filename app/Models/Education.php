<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'place_name','specialization','degree','start_date',
        'end_date','details','is_active','user_id',
    ];
    protected $appends = ['format_start_date' , 'format_end_date' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getEducationCardAttribute()
    {
        return view('components.user.education_card', [
            'education' => $this,
        ])->render();
    }

    public function getFormatStartDateAttribute()
    {
        return Carbon::parse($this->start_date)->format('Y-m-d');
    }
    public function getFormatEndDateAttribute()
    {
        return Carbon::parse($this->end_date)->format('Y-m-d');
    }
}

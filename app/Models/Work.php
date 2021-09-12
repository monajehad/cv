<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Work extends Model
{
    protected $fillable = [
        'company_name','job_title','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function getWorkCardAttribute()
    {
        return view('components.user.work_card', [
            'work' => $this,
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

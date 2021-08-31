<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company_name','job_title','degree','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

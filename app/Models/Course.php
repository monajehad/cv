<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','source','hours','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

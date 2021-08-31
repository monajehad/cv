<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interset extends Model
{
    protected $fillable = [
        'name','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

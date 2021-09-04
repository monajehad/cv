<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $fillable = [
        'name','level',
        'is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

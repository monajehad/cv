<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'name','is_active','user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getInterestCardAttribute()
    {
        return view('components.user.interest_card', [
            'interest' => $this,
        ])->render();
    }
   
}

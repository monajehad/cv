<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'portfolio_name','link','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

   
}

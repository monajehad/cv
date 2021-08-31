<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'social_website_id','link','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
    
    public function social_website()
    {
        $this->belongsTo(Social_website::class);
    }

   
}

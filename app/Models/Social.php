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
      return  $this->belongsTo(User::class);
    }
    
    public function getSocialCardAttribute()
    {
        return view('components.user.social_card', [
            'social' => $this,
        ])->render();
    }
   
    public function social_website ()
    {
        return $this->belongsTo(Social_website::class);
    }
 
}

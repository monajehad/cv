<?php

namespace App\Models;
use App\Traits\MetronicPaginate;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model

{     
  use  MetronicPaginate;

  const MEDIA_PATH = "users/";
  
  
    protected $fillable = [
        'portfolio_name','link','start_date',
        'end_date','details','is_active','user_id',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
   
    public function portfolioMedia()
    {
      return $this->hasMany(Portfolio_media::class);
    }
}

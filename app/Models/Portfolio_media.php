<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio_media extends Model
{

     
    protected $fillable = [
        'name','position','type','portfolio_id'
        
    ];

    public function portfolio()
    {
        $this->belongsTo(Portfolio::class);
    }

   
}

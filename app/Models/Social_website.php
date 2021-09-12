<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_website extends Model
{
    protected $fillable = [
        'name','icon_name',
     
    ];

    public function social ()
    {
        return $this->hasOne(Social::class);
    }
  
   
}

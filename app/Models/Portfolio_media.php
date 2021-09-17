<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio_media extends Model
{
        const MEDIA_PATH = "public/uploads/tmp"; 

     
    protected $fillable = [
        'name','position','type','portfolio_id'
        
    ];

    public function portfolio()
    {
      return  $this->belongsTo(Portfolio::class);
    }
    public function getNameAttribute($image)
    {
        if($image){
            $image = Storage::url('public/uploads/tmp/'.$image.'');
            return $image;
        }else{
            $image = Storage::url('public/uploads/tmp/');
            return $image;
        }
    }
   
}

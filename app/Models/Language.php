<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name','code'
    ];

   
    public function people()
    {
        return $this->hasOne(People::class);
        // return $this->belongsToMany(People::class,'people_languages','language_id','people_id');
    }
}

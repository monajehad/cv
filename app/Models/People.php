<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{     const MEDIA_PATH = "users/"; 
    protected $table ="peoples";
    protected $fillable = [
        'name','email','gender','mobile',
        'birthday','nationality','marital','language','details','user_id'
    ];
    protected $appends = ['img'  ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function peopleAddress()
    {
        return $this->hasOne(PeopleAddress::class);
    }
    public function getImgAttribute()
    {
        return "";
    }
    
}

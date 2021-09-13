<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{     const MEDIA_PATH = "users/"; 
    protected $table ="peoples";
    protected $fillable = [
        'img','name','email','gender','mobile',
        'birthday','nationality','marital','details','user_id'
    ];
   // protected $appends = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function peopleAddress()
    {
        return $this->hasOne(PeopleAddress::class);
    }
    public function peoplelanguage()
    {
        return $this->hasOne(peopleLanguage::class);
    }
    public function getImgAttribute()
    {
        return "";
    }
    public function getImgUrlAttribute()
    {
        return getImageUrl(self::MEDIA_PATH , $this->img);
    }
}

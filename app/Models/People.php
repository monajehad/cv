<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class People extends Model
{     const MEDIA_PATH = "public/users"; 
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
    // public function peoplelanguage()
    // {
    //     return $this->hasOne(peopleLanguage::class);
    // }
    public function languages()
    {
    return $this->belongsToMany(Language::class,'people_languages','people_id','language_id');  
    

    }
    public function isHasLanguage($id){
        return PeopleLanguage::where('people_id',$this->id)->where('language_id',$id)->count()!=0;
    }
    public function getImgAttribute($image)
    {
        if($image){
            $image = Storage::url('public/users/'.$image.'');
            return $image;
        }else{
            $image = Storage::url('public/users/blank.png');
            return $image;
        }
    }

    public function getImgUrlAttribute()
    {
        return getImageUrl(self::MEDIA_PATH , $this->img);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeopleLanguage extends Model
{
    protected $fillable = [
        'people_id','language_id'
    ];
 
    protected $table = 'people_languages';

//    public function language()
//     {
//         return $this->belongsToMany(Language::class);
//     }
//     public function people()
//     {
//         return $this->belongsTo(People::class);
//     }
}

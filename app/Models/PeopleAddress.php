<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeopleAddress extends Model
{
    protected $fillable = [
        'people_id','country_id','city','street'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function people()
    {
        return $this->belongsTo(People::class);
    }
}

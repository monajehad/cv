<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name','code','position','is_active'
    ];

    public function person_addresses()
    {
        $this->hasMany(PersonAddress::class);
    }
}

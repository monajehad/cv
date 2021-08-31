<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [];

    public function user_addresses()
    {
        $this->hasMany(UserAddress::class);
    }
}

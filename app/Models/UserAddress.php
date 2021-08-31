<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [];

    public function country()
    {
        $this->belongsTo(Country::class);
    }
}

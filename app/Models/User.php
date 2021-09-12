<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education()
    {
      return $this->hasMany(Education::class);
    }
    public function work()
    {
        return  $this->hasMany(Work::class);
    }
    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
    public function interest()
    {
        return $this->hasMany(Interest::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
    public function social()
    {
        return $this->hasMany(Social::class);
    }
    public function person()
    {
        return $this->hasOne(Person::class);
    }
    public function testimonial()
    {
        return $this->hasMany(Testimonial::class);
    }
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}

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
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'pesel',
        'phone',
        'status',
        'type',
        'car',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function usersVisits(){
        return $this->hasMany(Visit::class, 'user_id');
    }
    public function rentiersVisits(){
        return $this->hasMany(Visit::class, 'rentier_id');
    }
    public function parking(){
        return $this->belongsToMany(Parking::class, 'parking_users');
    }

    public function specialization(){
        return $this->belongsToMany(Specialization::class, 'specialization_users');
    }
}

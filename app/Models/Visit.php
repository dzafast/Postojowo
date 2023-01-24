<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'rentier_id',
        'date',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function rentier(){
        return $this->belongsTo(User::class, 'rentier_id');
    }
}

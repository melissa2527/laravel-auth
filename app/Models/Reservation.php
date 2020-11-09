<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->belongsTo(\App\Models\Car::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    protected $fillable = [
        'user_id',
        'car_id',
        'from',
        'to'
    ];
}

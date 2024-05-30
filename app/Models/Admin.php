<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

     // Tentukan fillable properties
     protected $fillable = [
        'username',
        'password',
    ];

    // Tentukan hidden properties
    protected $hidden = [
        'password',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    //mendefinisikan kolom yang ingin diinput data
    protected $fillable = [
        'nama',
        'kode',
        'harga',
        'stok',
        'deskripsi',
        'image'
    ];
}

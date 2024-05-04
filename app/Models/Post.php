<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'berat',
        'harga',
        'stok',
        'kondisi',
        'deskripsi',
    ];
}

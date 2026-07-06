<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk3 extends Model
{
    protected $table = 'produk3';

    protected $fillable = [
     
        'judul',
        'deskripsi',
        'gambar',
    ];
}
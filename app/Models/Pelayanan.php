<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $fillable = [
        'sliderPelayanan',
            'services',
            'theproduk',
            'produk1',
            'produk2',
            'produk3',
            'theprodukimage'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepons';
    protected $fillable = [
        'nomor',
        'link_whatsapp'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empatkontak extends Model
{
    protected $fillable = [
        'jenis',
        'isi',
        'link'
    ];
}

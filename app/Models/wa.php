<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wa extends Model
{
    protected  $table = 'wa';
    protected $fillable = [
        'chat',
        'link_wa'
    ];
}

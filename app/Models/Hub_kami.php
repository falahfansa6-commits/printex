<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hub_kami extends Model
{
    protected $table= 'hub_kami'; 
    protected $fillable = [
        'nama',
        'no_wa',
        'email',
        'des'
    ];
}

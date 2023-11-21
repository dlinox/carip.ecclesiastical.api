<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = "countries";
    protected $timestamp = false;

    protected $filatable = ['name', 'dial_code', 'continent', 'code' ];
    
}

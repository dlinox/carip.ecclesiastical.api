<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'country_id',
        'ubigeo_code',
        'address',
        'reference',
        'latitude',
        'longitude',
        'is_main',
        'is_active',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function ubigeo()
    {
        return $this->belongsTo(Ubigeo::class, 'ubigeo_code', 'code');
    }
}

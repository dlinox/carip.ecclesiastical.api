<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'name',
        'paternal_name',
        'maternal_name',
        'document_type',
        'document_number',
        'gender',
        'birth_date',
        'birth_country_id',
        'is_foreigner',
        'is_active',
    ];

    protected $dates = ['birth_date'];

    public function birthCountry()
    {
        return $this->belongsTo(Country::class, 'birth_country_id');
    }
}

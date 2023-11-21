<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonPhone extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'phone_number',
        'dial_code',
        'has_whatsapp',
        'is_active',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

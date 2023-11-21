<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonEmail extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_id',
        'email',
        'is_username',
        'is_verified',
        'is_active',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}

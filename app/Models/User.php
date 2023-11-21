<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'person_id',
        'username',
        'password',
        'is_active',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    public $headers =  [
        ['text' => "ID", 'value' => "id", 'short' => false, 'order' => 'ASC'],
        ['text' => "Nombre", 'value' => "fullname", 'short' => false, 'order' => 'ASC'],
        ['text' => "Correo", 'value' => "email", 'short' => false, 'order' => 'ASC'],
        ['text' => "Rol", 'value' => "role", 'short' => false, 'order' => 'ASC'],
        ['text' => "Estado", 'value' => "is_active", 'short' => false, 'order' => 'ASC'],
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function userPlaces()
    {
        return $this->hasMany(UserPlace::class);
    }

    public function places()
    {
        return $this->belongsToMany(Place::class, 'user_places');
    }
}

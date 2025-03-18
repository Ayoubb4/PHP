<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nombre', 'email', 'password', 'rol', 'membresia',
    ];
    
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'usuario_id');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
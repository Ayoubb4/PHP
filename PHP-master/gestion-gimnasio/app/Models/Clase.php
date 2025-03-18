<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'profesor_id',
    ];

    public function profesor()
    {
        return $this->belongsTo(Usuario::class, 'profesor_id');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
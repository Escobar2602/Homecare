<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'telefono',
        'especialidad',
        'cedula',
        'correo',
        'direccion',
        'fechaNacimiento',
        'fechaCita',
        'hora',
        'descripcion'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLogin extends Model
{
    use HasFactory;
    protected $table = 'Usuario_Login';
    public $timestamps = false;

    protected $fillable = [
        'idUsuario_Login',
        'Nombre',
        'Correo',
        'Telefono',
        'Rol',
        'Identificacion',
        'Codigo_Verificacion',
    ];
}

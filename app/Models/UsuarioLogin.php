<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;

class UsuarioLogin extends Model implements AuthenticatableContract
{
    use Authenticatable, Notifiable;

    protected $table = 'usuario_login';
    protected $primaryKey = 'id_usuario_login';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'telefono',
        'rol',
        'identificacion',
        'codigo_validacion',
        'codigo_expiracion',
    ];
}

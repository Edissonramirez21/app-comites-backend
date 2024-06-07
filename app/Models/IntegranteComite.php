<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntegranteComite extends Model
{
    use HasFactory;

    protected $table = 'Integrante_Comite';
    protected $primaryKey = 'idUsuario'; 
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Telefono',
        'Correo',
        'Rol',
    ];

    public function citaciones()
{
    return $this->belongsToMany(Citacion::class, 'Citacion_a_IntegranteComite', 'IntegranteComite_idUsuario', 'Citacion_idCitacion');
}

}

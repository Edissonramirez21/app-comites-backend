<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinadorAcademico extends Model
{
    use HasFactory;
    
    // Se Define el nombre de la tabla si no sigue la convención de Laravel
    protected $table = 'Coordinador_Academico';

    // Se Define la clave primaria si no sigue la convención de Laravel
    protected $primaryKey = 'idCoordinador';

    // Deshabilitar timestamps si no tienes created_at y updated_at en tu tabla
    public $timestamps = false;

    // Se Define los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Nombre',
        'Telefono',
        'Correo',
    ];

    // Se Define las relaciones con otros modelos

    /**
     * Se obtiene las solicitudes de comité asociadas al coordinador académico.
     */
    public function solicitudesComite()
    {
        return $this->hasMany(SolicitudComite::class, 'fk_idCoordinador', 'idCoordinador');
    }
}

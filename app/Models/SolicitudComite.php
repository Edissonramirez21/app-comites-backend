<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudComite extends Model
{
    use HasFactory;
    
    protected $table = 'Solicitud_Comite';

    
    protected $primaryKey = 'idSolicitudComite';

    public $timestamps = false;

    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Fecha',
        'Motivo',
        'Acta',
        'Requerimiento_Aprendiz',
        'Evidencias',
        'fk_idInstructor',
        'fk_idCoordinador',
    ];

    // Se Define las relaciones con otros modelos

    /**
     * Se obtiene el instructor asociado a la solicitud de comité.
     */
    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'fk_idInstructor', 'idInstructor');
    }

    /**
     * Se obtiene el coordinador asociado a la solicitud de comité.
     */
    public function coordinador()
    {
        return $this->belongsTo(CoordinadorAcademico::class, 'fk_idCoordinador', 'idCoordinador');
    }

    /**
     * Se obtiene los aprendices asociados a la solicitud de comité.
     */
    public function aprendices()
    {
        return $this->belongsToMany(Aprendiz::class, 'Solicitud_Comite_a_Aprendiz', 'Solicitud_Comite_idSolicitudComite', 'Aprendiz_idAprendiz');
    }

    /**
     * Se obtiene las faltas asociadas a la solicitud de comité.
     */
    public function faltas()
    {
        return $this->belongsToMany(Falta::class, 'Solicitud_Comite_Falta', 'Solicitud_Comite_idSolicitudComite', 'Falta_idReglamento');
    }

        public function citaciones()
    {
        return $this->hasMany(Citacion::class, 'fk_idSolicitudComite', 'idSolicitudComite');
    }

}

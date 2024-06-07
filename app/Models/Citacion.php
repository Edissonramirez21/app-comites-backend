<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citacion extends Model
{
    use HasFactory;
    
  
    protected $table = 'Citacion';

  
    protected $primaryKey = 'idCitacion';

   
    public $timestamps = false;

    // Se Definen los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Lugar',
        'fk_idSolicitudComite',
        'fk_idHorario_Bienestar'
    ];

    
    /**
     * Se obtiene la solicitud de comité asociada a la citación.
     */
    public function solicitudComite()
    {
        return $this->belongsTo(SolicitudComite::class, 'fk_idSolicitudComite', 'idSolicitudComite');
    }

    /**
     * Se obtiene el horario de bienestar asociado a la citación.
     */
    public function horarioBienestar()
    {
        return $this->belongsTo(HorarioBienestar::class, 'fk_idHorario_Bienestar', 'idHorario_Bienestar');
    }

    /**
     * Se obtiene los integrantes del comité asociados a la citación.
     */
    public function integrantesComite()
    {
        return $this->belongsToMany(IntegranteComite::class, 'Citacion_a_IntegranteComite', 'Citacion_idCitacion', 'IntegranteComite_idUsuario');
    }
}

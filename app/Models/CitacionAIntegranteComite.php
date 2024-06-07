<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitacionAIntegranteComite extends Model
{
    use HasFactory;

    
   
    protected $table = 'Citacion_a_IntegranteComite';

    
    protected $primaryKey = null;

   
    public $timestamps = false;

    
    public $incrementing = false;

    // Se Definen los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Citacion_idCitacion',
        'IntegranteComite_idUsuario'
    ];

    // Se Definen las relaciones con otros modelos

    /**
     * Se obtiene la citación asociada.
     */
    public function citacion()
    {
        return $this->belongsTo(Citacion::class, 'Citacion_idCitacion', 'idCitacion');
    }

    /**
     * Se obtiene el integrante del comité asociado.
     */
    public function integranteComite()
    {
        return $this->belongsTo(IntegranteComite::class, 'IntegranteComite_idUsuario', 'idUsuario');
    }
}

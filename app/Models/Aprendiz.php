<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
  
    protected $table = 'Aprendiz';

    
    protected $primaryKey = 'idAprendiz';

    
    public $timestamps = false;

    
    protected $fillable = [
        'name',
        'tipo_documento',
        'identificacion',
        'telefono',
        'email',
        'ficha',
        'programa',
        'etapa_formacion',
        'nivel',
        'jornada',
    ];

    

    /**
     * Se obtiene las solicitudes de comité asociadas al aprendiz.
     */
    public function solicitudesComite()
    {
        return $this->belongsToMany(SolicitudComite::class, 'Solicitud_Comite_a_Aprendiz', 'Aprendiz_idAprendiz', 'Solicitud_Comite_idSolicitudComite');
    }
}

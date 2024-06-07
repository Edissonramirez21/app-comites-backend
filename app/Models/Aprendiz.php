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
        'Nombre',
        'Tipo_Documento',
        'Numero_Documento',
        'Telefono',
        'Correo',
        'Ficha',
        'Programa',
        'Etapa_Formacion',
        'Nivel',
        'Jornada'
    ];

    

    /**
     * Se obtiene las solicitudes de comité asociadas al aprendiz.
     */
    public function solicitudesComite()
    {
        return $this->belongsToMany(SolicitudComite::class, 'Solicitud_Comite_a_Aprendiz', 'Aprendiz_idAprendiz', 'Solicitud_Comite_idSolicitudComite');
    }
}

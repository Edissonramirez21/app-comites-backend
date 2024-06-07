<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Falta extends Model
{
    use HasFactory;
    
   
    protected $table = 'Falta';

    
    protected $primaryKey = 'idReglamento';

    public $timestamps = false;

    // Define los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Tipo_falta',
        'Falta',
        'Gravedad'
    ];

    // Define las relaciones con otros modelos

    /**
     * Obtiene las solicitudes de comité asociadas a la falta.
     */
    public function solicitudesComite()
    {
        return $this->belongsToMany(SolicitudComite::class, 'Solicitud_Comite_Falta', 'Falta_idReglamento', 'Solicitud_Comite_idSolicitudComite');
    }
}

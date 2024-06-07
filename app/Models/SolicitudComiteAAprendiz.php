<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudComiteAAprendiz extends Model
{
    use HasFactory;

    
    protected $table = 'Solicitud_Comite_a_Aprendiz';
    public $timestamps = false;

    protected $fillable = [
        'Solicitud_Comite_idSolicitudComite',
        'Aprendiz_idAprendiz',
    ];

    
    public function aprendiz()
    {
        return $this->belongsTo(Aprendiz::class, 'Aprendiz_idAprendiz', 'idAprendiz');
    }

    
    public function solicitudComite()
    {
        return $this->belongsTo(Solicitud_Comite::class, 'Solicitud_Comite_idSolicitudComite', 'idSolicitudComite');
    }
}

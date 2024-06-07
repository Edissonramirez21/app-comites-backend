<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudComiteFalta extends Model
{
    use HasFactory;
    protected $table = 'Solicitud_Comite_Falta';
    public $timestamps = false;

    protected $fillable = [
        'Solicitud_Comite_idSolicitudComite',
        'Falta_idReglamento',
    ];

    public function falta()
    {
        return $this->belongsTo(Falta::class, 'Falta_idReglamento', 'idReglamento');
    }

   
    public function solicitudComite()
    {
        return $this->belongsTo(Solicitud_Comite::class, 'Solicitud_Comite_idSolicitudComite', 'idSolicitudComite');
    }
}

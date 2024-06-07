<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
   
    protected $table = 'Instructor';

    
    protected $primaryKey = 'idInstructor';

    
    public $timestamps = false;

    // Se Define los atributos que se pueden asignar masivamente
    protected $fillable = [
        'Nombre',
        'Correo',
        'Telefono',
    ];

    // Se Define las relaciones con otros modelos

    /**
     * Se obtiene las solicitudes de comité asociadas al instructor.
     */
    public function solicitudesComite()
    {
        return $this->hasMany(SolicitudComite::class, 'fk_idInstructor', 'idInstructor');
    }
}

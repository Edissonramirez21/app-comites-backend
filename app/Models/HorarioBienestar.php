<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioBienestar extends Model
{
    use HasFactory;

    protected $table = 'Horario_Bienestar';
    protected $primaryKey = 'idHorario_Bienestar';
    public $timestamps = false;

    protected $fillable = [
        'Fecha',
        'Hora',
    ];


    public function citaciones()
{
    return $this->hasMany(Citacion::class, 'fk_idHorario_Bienestar', 'idHorario_Bienestar');
}

}

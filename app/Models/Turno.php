<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $fillable = [
        'codigo_turno',
        'nombre_turno',
        'descripcion',
        'horas_trabajo',
        'hora_entrada_am',
        'hora_salida_am',
        'hora_entrada_pm',
        'hora_salida_pm',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/turnos/'.$this->getKey());
    }
}

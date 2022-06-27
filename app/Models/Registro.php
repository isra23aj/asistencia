<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
        'fecha',
        'hora_entrada_am',
        'hora_salida_am',
        'hora_entrada_pm',
        'hora_salida_pm',
        'codigo_empleado',
        'id_biometrico',
        'id_empleado',
    
    ];
    
    
    protected $dates = [
        'fecha',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/registros/'.$this->getKey());
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nic',
        'codigo_empleado',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'telefono',
        'celular',
        'email',
        'profesión',
        'puesto',
        'id_departamento',
        'id_turno',
    
    ];
    
    
    protected $dates = [
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/empleados/'.$this->getKey());
    }
}

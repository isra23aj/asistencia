<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'fecha_pedido',
        'fecha_inicio',
        'fecha_fin',
        'nro_dias',
        'motivo',
        'tipo_permiso',
        'autoriza',
        'id_empleado',
    
    ];
    
    
    protected $dates = [
        'fecha_pedido',
        'fecha_inicio',
        'fecha_fin',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/permisos/'.$this->getKey());
    }
}

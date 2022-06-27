<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retraso extends Model
{
    protected $fillable = [
        'fecha',
        'minutos',
        'horas',
        'id_empleado',
        'id_registro',
    
    ];
    
    
    protected $dates = [
        'fecha',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/retrasos/'.$this->getKey());
    }
}

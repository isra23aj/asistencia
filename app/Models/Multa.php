<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    protected $fillable = [
        'fecha',
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
        return url('/admin/multas/'.$this->getKey());
    }
}

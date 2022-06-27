<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biometrico extends Model
{
    protected $fillable = [
        'codigo_bio',
        'fecha',
        'hora',
        'ubicacion',
        'estado',
    
    ];
    
    
    protected $dates = [
        'fecha',
    
    ];
    public $timestamps = false;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/biometricos/'.$this->getKey());
    }
}

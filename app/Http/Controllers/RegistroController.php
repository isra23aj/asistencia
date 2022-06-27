<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function index(Request $request){
        return ('formBootstrap');
    }


    public function guardar(Request $request){
        $request -> validate([
        'codigo_empleado' => 'required',
    ]);

        $registro = new Registro;
        $registro-> codigo_empleado = $request->codigo_empleado;

        $registro->save();
        return back()->with ('success','Formulario valido'); 
    }
}

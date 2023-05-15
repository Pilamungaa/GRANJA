<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porcinos;



class CuarentenaController extends Controller
{

    public function index() //Leer todos los registros
    {
        $porcino = Porcinos::where('idcuarentena','=',1)->get();
        return view('cuarentena.index', compact('porcino'));
    }

    public function activar($id, Request $request){
        
        $porcino = Porcinos::find($id);
        $porcino->update($request->all());
        return redirect()->route('cuarentena.index',$porcino)->with('mensaje','Actualizado');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apariamientos;
//use App\Http\Controllers\Controller;

class ApariamientosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Leer todos los registros
    {
        $apariamiento = Apariamientos::all();
        return view('apariamientos.index', compact('apariamiento'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() // abrir formulario para un nuevo registro
    {
        return view('apariamientos.create');
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la base de datos el nuevo registro
    {
        $request->validate(
            [
                'codigo_hembra'=>'required',
                'codigo_macho'=>'required',
                'responsable'=>'required',
                'fecha_apariamiento'=>'required',
                'fecha_parto'=>'required',
                'jaula'=>'required', 
                'observacion'=>'required'
                
            ]
        );
        
        //return $request->all();
        $apariamiento = Apariamientos::create($request->all());
        return redirect()->route('apariamientos.index',$apariamiento);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Apariamientos $apariamientos) // visualizar un solo registro a detalle
    {
        return view('apariamientos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apariamientos $apariamiento) // para abrir un formulario de editar
    {
        
        return view('apariamientos.edit',compact('apariamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apariamientos $apariamiento) // para actualizar la información del registro en la DB
    {
        $request->validate(
            [
                'codigo_hembra'=>'required',
                'genero_macho'=>'required',
                'responsable'=>'required',
                'fecha_apariamiento'=>'required',
                'fecha_parto'=>'required',
                 'jaula'=>'required' , 
                'observacion'=>'required'
                
            ]
            );
            $apariamiento->update($request->all());
            return redirect()->route('apariamientos.index',$apariamiento)->with('mensaje','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apariamientos $apariamiento) //para borrar
    {
        $apariamiento->delete();
        return redirect()->route('apariamientos.index')->with('mensaje','Porcino Eliminado');
    }
    
}

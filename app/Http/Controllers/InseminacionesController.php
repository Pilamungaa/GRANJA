<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inseminaciones;

class InseminacionesController extends Controller
{
   
    public function index() //Leer todos los registros
    {
        $inseminacion = Inseminaciones::all();
        return view('inseminaciones.index', compact('inseminacion'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() // abrir formulario para un nuevo registro
    {
        return view('inseminaciones.create');
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la base de datos el nuevo registro
    {
        $request->validate(
            [
                'codigo_hembra'=>'required',
                'raza_hembra'=>'required',
                'codigo_macho'=>'required',
                'raza_macho'=>'required',
                'fecha_inseminacion'=>'required',
                'observacion'=>'required'
                
            ]
            );
        //return $request->all();
        $inseminacion = Inseminaciones::create($request->all());
        return redirect()->route('inseminaciones.index',$inseminacion);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Inseminaciones $inseminaciones) // visualizar un solo registro a detalle
    {
        return view('inseminaciones.show');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inseminaciones $inseminacion) // para abrir un formulario de editar
    {
        
        return view('inseminaciones.edit',compact('inseminacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inseminaciones $inseminacion) // para actualizar la información del registro en la DB
    {
        $request->validate(
            [
                'codigo_hembra'=>'required',
                'raza_hembra'=>'required',
                'codigo_macho'=>'required',
                'raza_macho'=>'required',
                'fecha_inseminacion'=>'required',
                'observacion'=>'required'
            ]
            );
            $inseminacion->update($request->all());
            return redirect()->route('inseminaciones.index',$inseminacion)->with('mensaje','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inseminaciones $inseminacion) //para borrar
    {
        $inseminacion->delete();
        return redirect()->route('inseminaciones.index')->with('mensaje','inseminación Eliminado');
    }
    
}
    




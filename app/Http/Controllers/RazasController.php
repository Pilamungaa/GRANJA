<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Razas;
//use App\Http\Controllers\Controller;

class RazasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //Leer todos los registros
    {
        $raza = Razas::all();
        return view('razas.index', compact('raza'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() // abrir formulario para un nuevo registro
    {
        return view('razas.create');
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la base de datos el nuevo registro
    {
        $request->validate(
            [
               
                'raza'=>'required',
                
            ]
            );
        //return $request->all();
        $raza = Razas::create($request->all());
        return redirect()->route('razas.index',$raza);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Razas $razas) // visualizar un solo registro a detalle
    {
        return view('razas.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Razas $raza) // para abrir un formulario de editar
    {
        
        return view('razas.edit',compact('raza'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Razas $raza) // para actualizar la información del registro en la DB
    {
        $request->validate(
            [
                
                'raza'=>'required',
               
                
            ]
            );
            $raza->update($request->all());
            return redirect()->route('razas.index',$raza)->with('mensaje','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Razas $raza) //para borrar
    {
        $raza->delete();
        return redirect()->route('razas.index')->with('mensaje','Raza Eliminado');
    }
   
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitas;
//use App\Http\Controllers\Controller;


class VisitasController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index() //Leer todos los registros
    {
        $visita = Visitas::all();
        return view('visitas.index', compact('visita'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() // abrir formulario para un nuevo registro
    {
        return view('visitas.create');
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la base de datos el nuevo registro
    {
        $request->validate(
            [
                'motivo_viista'=>'required',
                'fecha_visita'=>'required',
                'porcino_tratado'=>'required',
                'medicamento_aplicado'=>'required',
                'insertar_tratamiento'=>'required',
                'observacion'=>'required'
                
            ]
            );
        //return $request->all();
        $visita = Visitas::create($request->all());
        return redirect()->route('visitas.index',$visita);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitas $visitas) // visualizar un solo registro a detalle
    {
        return view('visitas.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitas $visita) // para abrir un formulario de editar
    {
        
        return view('visitas.edit',compact('visita$visita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitas $visita) // para actualizar la información del registro en la DB
    {
        $request->validate(
            [
                'motivo_viista'=>'required',
                'fecha_visita'=>'required',
                'porcino_tratado'=>'required',
                'medicamento_aplicado'=>'required',
                'insertar_tratamiento'=>'required',
                'observacion'=>'required'
                
            ]
            );
            $visita->update($request->all());
            return redirect()->route('visitas.index',$visita)->with('mensaje','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitas $visita) //para borrar
    {
        $visita->delete();
        return redirect()->route('visitas.index')->with('mensaje','Porcino Eliminado');
    }
   
    

}

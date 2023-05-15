<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porcinos;
use App\Models\Razas;
//use App\Http\Controllers\Controller;


class PorcinosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index() //Leer todos los registros
    {
        $porcino = Porcinos::where('idcuarentena','=',0)->get();
        return view('porcinos.index', compact('porcino'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() // abrir formulario para un nuevo registro
    {
        $razas = Razas::all();
        return view('porcinos.create',compact('razas'));
        
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //para guardar en la base de datos el nuevo registro
    {
        $request->validate(
            [
                'codigo'=>'required',
                'genero'=>'required',
                'tipo'=>'required',
                'raza'=>'required',
                'fecha_nacimiento'=>'required',
                'fecha_entrada'=>'required',
                'observacion'=>'required'
                
            ]
            );
        //return $request->all();
        $porcino = Porcinos::create($request->all());
        return redirect()->route('porcinos.index',$porcino)->with('mensaje','Registrado');;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Porcinos $porcinos) // visualizar un solo registro a detalle
    {
        return view('porcinos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Porcinos $porcino) // para abrir un formulario de editar
    {
        $razas = Razas::all();
        return view('porcinos.edit',compact('porcino','razas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Porcinos $porcino) // para actualizar la información del registro en la DB
    {
        
        $request->validate(
            [
                'codigo'=>'required',
                'genero'=>'required',
                'tipo'=>'required',
                'raza'=>'required',
                'fecha_nacimiento'=>'required',
                'fecha_entrada'=>'required',
                'observacion'=>'required'
                
            ]
            );
            $porcino->update($request->all());
            return redirect()->route('porcinos.index',$porcino)->with('mensaje','Actualizado');
    }

    public function update_cuarentena($id , Request $request){
        
        
        $porcino = Porcinos::find($id);
        $porcino->update($request->all());
        return redirect()->route('porcinos.index',$porcino)->with('mensaje','Actualizado');
    }

    public function update_estado($id, Request $request)
    {
        $porcino = Porcinos::find($id);
        $porcino->update($request->all()); 
        return redirect()->route('porcinos.index',$porcino)->with('mensaje','Porcino Inactivo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Porcinos $porcino) //para borrar
    {
        $porcino->delete();
        return redirect()->route('porcinos.index')->with('mensaje','Porcino Eliminado');
    }
   
    

}

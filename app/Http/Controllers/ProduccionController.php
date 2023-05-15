<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porcinos;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;

class ProduccionController extends Controller
{
    public function index() //Leer todos los registros
    {
        $porcinos = Porcinos::where('idestado','=',1)->where('idcuarentena','=',0)->count();
        $cuarentena = Porcinos::where('idestado','=',1)->where('idcuarentena','=',1)->count();
        $reproductora = Porcinos::where('idestado','=',1)->where(DB::raw('UPPER(tipo)'),'=',DB::raw("UPPER('Reproductora')"))->count();
        $lechon = Porcinos::where('idestado','=',1)->where(DB::raw('UPPER(tipo)'),'=',DB::raw("UPPER('Lechon')"))->count();

        return view('produccion.index', compact('porcinos','cuarentena','reproductora','lechon'));
    }
}
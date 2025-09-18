<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', ['servicios' => $servicios]);
    }

    public function show( int $id)
    {
        // Vamos buscar o parametro de id
        // $servicios = Servicio::find($id);
        $servicios = Servicio::findOrFail($id);

        // if($servicios === null){
        //     return redirect()->route('servicios.index');
        // }

        return view('servicios.show', ['servicios' => $servicios]);
    }
}
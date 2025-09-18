<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request; // Import the Request class

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function servicios()
    {
        $servicios = Servicio::all();

        return view('admin.servicios.index', compact('servicios'));

    }

    public function create()
    {
        return view('admin.servicios.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'     => 'required|string|max:255',
            'slug'     => 'required|string|unique:servicios,slug',
            'image'    => 'nullable|string',
            'resume'   => 'nullable|string',
            'category' => 'nullable|string', // pode ser JSON ou array
            'price'    => 'required|numeric|min:0',
        ]);

        Servicio::create($validate);

        return redirect()->route('admin.servicios.index')->with('sucess', 'Servicio creado con éxito');
    }

    public function details($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('admin.servicios.details', ['servicio' => $servicio]);
    }

}
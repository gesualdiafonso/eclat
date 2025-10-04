<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Modelos;
use Illuminate\Http\Request;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = DB::table('modelos')->select('*')->get();

        return view('modelos.index', ['modelos' => $modelos]);
    }

    public function modelos()
    {
        $modelo = Modelos::all();

        return view('admin.modelos.index', compact(['modelo']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:modelos,name',
            'image' => 'required|image|mimes:jpg,jpeg, png,webp|max:2048',
            'altura' => 'required|numeric|min:0',
            'bust' => 'required|numeric|min:0',
            'cintura' => 'required|numeric|min:0',
            'zapato' => 'required|numeric|min:0',
            'vestido' => 'required|numeric|min:0',
            'tamano' => 'required|string|max:10',
            'ojos' => 'required|string|max:50',
            'cabello' => 'required|string|max:60',
            'fecha_nacimiento' => '',
            'ubicacion' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:100',
            'description' => 'required|string',
            'estilos' => 'required|string',
        ]);

        $data = $request->except(['_token']);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/modelos_eclat');

            if(!file_exists($destinationPath)){
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/modelos_eclat/' . $imageName;
        }

        if (!empty($data['estilos'])) {
            $estilos = array_map('trim', explode(',', $data['estilos']));
            $data['estilos'] = json_encode($estilos);
        }

        Modelos::create($data);

        return redirect()->route('admin.modelos.index')->with('success', 'Modelo creado con el éxitos.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        return view('modelos.show', ['modelo' => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        return view('admin.modelos.edit', ['modelo' => $modelo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $modelo = Modelos::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:modelos,name,' . $id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'altura' => 'required|numeric|min:0',
            'bust' => 'required|integer|min:0',
            'cintura' => 'required|integer|min:0',
            'zapato' => 'required|integer|min:0',
            'vestido' => 'required|integer|min:0',
            'tamano' => 'required|string|max:10',
            'ojos' => 'required|string|max:50',
            'cabello' => 'required|string|max:60',
            'fecha_nacimiento' => 'required|date',
            'ubicacion' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'description' => 'required|string',
            'estilos' => 'required|string',
        ]);

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/modelos_eclat');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/modelos_eclat/' . $imageName;
        }

        // transformar estilos em JSON
        $data['estilos'] = json_encode(explode(',', $request->input('estilos')));

        $modelo->update($data);

        return redirect()->route('admin.modelos.index')->with('success', 'Modelo actualizado con éxito');
    }

    public function delete(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        return view('admin.modelos.delete', ['modelo' => $modelo]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        $modelo->delete();

        return redirect()->route('admin.modelos.index')->with('success', 'Modelo eliminado con éxito');
    }
}

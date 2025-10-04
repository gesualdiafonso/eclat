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
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $data = $request->except(['_token']);

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time(). '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/modelos');

            if(!file_exists($destinationPath)){
                mkdir($destinationPath, 077, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/modelos' . $imageName;
        }

        Modelos::created($data);

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
        $modelos = Modelos::findOrFail($id);

        $request->validate([
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
            '' => '',
        ]);

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/modelos');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/modelos/' . $imageName;
        }

        $modelos->update($data);

        return redirect()->route('admin.modelos.index', $modelos->id)->with('success', 'Modelo actualizado con exito');
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

<?php

namespace App\Http\Controllers;

use App\Models\Estilos;
use App\Models\Modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = Modelos::with('estilos')->get();
        return view('modelos.index', compact('modelos'));
    }

    public function modelos()
    {
        $modelo = Modelos::with('estilos')->get();
        return view('admin.modelos.index', compact('modelo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estilos = Estilos::all();
        return view('admin.modelos.create', compact('estilos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:modelos,name',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'altura' => 'required|numeric|min:0',
            'bust' => 'required|numeric|min:0',
            'cintura' => 'required|numeric|min:0',
            'zapato' => 'required|numeric|min:0',
            'vestido' => 'required|numeric|min:0',
            'tamano' => 'required|string|max:10',
            'ojos' => 'required|string|max:50',
            'cabello' => 'required|string|max:60',
            'fecha_nacimiento' => 'nullable|date',
            'ubicacion' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:100',
            'description' => 'required|string',
            'campana' => 'required|string',
            'estilos' => 'nullable|array',
        ]);

        $data = $request->except(['_token', 'estilos']);

        // Upload da imagem
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nameSlug = Str::slug($request->input('name'));
            $imageName = $nameSlug . '-' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('modelos_eclat', $imageName, 'public');
            $data['image'] = 'storage/' . $path;
        }

        // Cria o modelo
        $modelo = Modelos::create($data);

        // Relaciona estilos (attach)
        if ($request->filled('estilos')) {
            $modelo->estilos()->attach($request->input('estilos'));
        }

        return redirect()->route('admin.modelos.index')
            ->with('success', 'Modelo creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $modelo = Modelos::with('estilos')->findOrFail($id);
        return view('modelos.show', compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $modelo = Modelos::with('estilos')->findOrFail($id);
        $estilos = Estilos::all();

        // Passa os IDs dos estilos já vinculados para marcar no form
        $estilosSelecionados = $modelo->estilos->pluck('estilos_id')->toArray();

        return view('admin.modelos.edit', compact('modelo', 'estilos', 'estilosSelecionados'));
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
            'fecha_nacimiento' => 'nullable|date',
            'ubicacion' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'description' => 'required|string',
            'campana' => 'required|string',
            'estilos' => 'nullable|array',
        ]);

        $data = $request->except(['_token', 'estilos']);

        // Substitui a imagem, se enviada
        if ($request->hasFile('image')) {
            if ($modelo->image && file_exists(public_path($modelo->image))) {
                unlink(public_path($modelo->image));
            }
            $image = $request->file('image');
            $nameSlug = Str::slug($request->input('name'));
            $imageName = $nameSlug . '-' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('modelos_eclat', $imageName, 'public');
            $data['image'] = 'storage/' . $path;
        }

        $modelo->update($data);

        // Atualiza os estilos (sync substitui attach/detach automático)
        if ($request->filled('estilos')) {
            $modelo->estilos()->sync($request->input('estilos'));
        } else {
            // Se não tiver estilos selecionados, remove todos
            $modelo->estilos()->detach();
        }

        return redirect()->route('admin.modelos.index')
            ->with('success', 'Modelo actualizado con éxito.');
    }

    public function delete(int $id)
    {
        $modelo = Modelos::findOrFail($id);
        return view('admin.modelos.delete', compact('modelo'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $modelo = Modelos::findOrFail($id);

        // Remove relações
        $modelo->estilos()->detach();

        // Remove imagem física
        if ($modelo->image && file_exists(public_path($modelo->image))) {
            unlink(public_path($modelo->image));
        }

        $modelo->delete();

        return redirect()->route('admin.modelos.index')
            ->with('success', 'Modelo eliminado con éxito.');
    }
}

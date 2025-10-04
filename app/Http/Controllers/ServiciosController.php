<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request; // Import the Request class

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        $totalServicios = Servicio::count();
        return view('servicios.index', ['servicios' => $servicios, 'totalServicios' => $totalServicios]);
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
        // $services = new Servicio;
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:servicios,slug',
            'resume' => 'required|string',
            'descript' => 'required|string',
            'category' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // guarda en la dato todo los valores del formulario menos el token llamado de Blacklisting
        $data = $request->except(['_token']);
        // Si hay una imagen, la guardamos en el almacenamiento y obtenemos la ruta
        // Upload manual para public/assets/images/servicios/
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/servicios');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/servicios/' . $imageName;
        }

        // Converter categoria para JSON se houver
        if (!empty($data['category'])) {
            $categories = array_map('trim', explode(',', $data['category']));
            $data['category'] = json_encode($categories);
        }

        // Crear el nuevo servicio
        Servicio::create($data);


        return redirect()->route('admin.servicios.index')->with('sucess', 'Servicio creado con éxito');
    }

    public function details($id)
    {
        $servicio = Servicio::findOrFail($id);
        return view('admin.servicios.details', ['servicio' => $servicio]);
    }

    public function update(Request $request, int $id)
    {
        $servicios = Servicio::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:servicios,slug,' . $servicios->id,
            'resume' => 'required|string',
            'descript' => 'required|string',
            'category' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/servicios');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/servicios/' . $imageName;
        }

        $servicios->update($data);

        return redirect()->route('admin.servicios.index', $servicios->id)->with('success', 'Servicio actualizado con éxito.');
    }

    public function delete( int $id){
        $servicio = Servicio::findOrFail($id);

        return view('admin.servicios.delete', ['servicio' => $servicio]);
    }

    public function destroy(int $id){
        $servicio = Servicio::findOrFail($id);
        $servicio->delete();
        return redirect()->route('admin.servicios.index')->with('success', 'Servicio ha sido eliminado con exito');
    }
}
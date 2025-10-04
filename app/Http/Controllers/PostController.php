<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Http\Request; // Import the Request class
use App\Models\Post; // Import the Post model

class PostController extends Controller
{
    public function index()
    {
        $post = DB::table('post')->select('*')->get();
        return view('post.index', ['post' => $post]);
    }

    public function show( int $id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }

    public function posts()
    {
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));

    }
    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        // $services = new Servicio;
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:post,slug',
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'author' => 'required|string|max:255',
            'category' => 'nullable|string',
            'resume' => 'required|string',
            'content' => 'required|string',
        ]);

        // guarda en la dato todo los valores del formulario menos el token llamado de Blacklisting
        $data = $request->except(['_token']);
        // Si hay una imagen, la guardamos en el almacenamiento y obtenemos la ruta
        // Upload manual para public/assets/images/servicios/
        // Upload manual para public/assets/images/servicios/
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/posts');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/posts/' . $imageName;
        }

        Post::create($data);

        return redirect()->route('admin.post.index')->with('success', 'Post creado con éxito.');
    }

    public function details(int $id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.details', ['post' => $post]);
    }

    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:post,slug,' . $post->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'author' => 'required|string|max:255',
            'category' => 'nullable|string',
            'resume' => 'required|string',
            'content' => 'required|string',
            'create_at' => 'nullable|date',
        ]);

        $data = $request->except(['_token']);

        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images/posts');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }

            $image->move($destinationPath, $imageName);

            $data['image'] = 'assets/images/posts/' . $imageName;
        }

        $post->update($data);

        return redirect()->route('admin.post.index', $post->id)->with('success', 'Post actualizado con éxito.');
    }

    public function delete(int $id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.delete', ['post' => $post]);
    }

    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Post eliminado con éxito.');
    }
}
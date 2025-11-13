<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Mostrar todos os posts
    public function index()
    {
        $posts = Post::with('categoria')->latest()->get();
        $lastPost = $posts->first();
        return view('post.index', compact('posts', 'lastPost'));
    }

    // Mostrar post individual
    public function show(int $id)
    {
        $post = Post::with('categoria')->findOrFail($id);
        return view('post.show', compact('post'));
    }

    // Listagem no admin
    public function posts()
    {
        $posts = Post::with('categoria')->get();
        return view('admin.post.index', compact('posts'));
    }

    // Formulário de criação
    public function create()
    {
        $categoria = Categoria::all();
        return view('admin.post.create', compact('categoria'));
    }

    // Criar post
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'author' => 'required|string|max:255',
            'categoria_fk' => 'required|exists:categoria,categoria_id',
            'resume' => 'required|string',
            'content' => 'required|string',
        ]);

        $data = $request->except(['_token']);

        // Upload da imagem
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nameSlug = Str::slug($request->input('name'));
            $imageName = $nameSlug . '-' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('modelos_eclat', $imageName, 'public');
            $data['image'] = 'storage/' . $path;
        }

        Post::create($data);

        return redirect()->route('admin.post.index')->with('success', 'Post criado com sucesso.');
    }

    // Mostrar detalhes do post
    public function details(int $id)
    {
        $post = Post::with('categoria')->findOrFail($id);

        $categorias = Categoria::all();

        return view('admin.post.details', compact(['post', 'categorias']));
    }

    // Atualizar post
    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'author' => 'required|string|max:255',
            'categoria_fk' => 'required|exists:categoria,categoria_id',
            'resume' => 'required|string',
            'content' => 'required|string',
        ]);

        $data = $request->except(['_token']);

        // Atualizar imagem
        if ($request->hasFile('image')) {
            if ($post->image && file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }

            $image = $request->file('image');
            $nameSlug = Str::slug($request->input('name'));
            $imageName = $nameSlug . '-' . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('modelos_eclat', $imageName, 'public');
            $data['image'] = 'storage/' . $path;
        }

        $post->update($data);

        return redirect()->route('admin.post.index')->with('success', 'Post atualizado com sucesso.');
    }

    // Confirmação de exclusão
    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.delete', compact('post'));
    }

    // Deletar post
    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);

        if ($post->image && file_exists(public_path($post->image))) {
            unlink(public_path($post->image));
        }

        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Post eliminado com sucesso.');
    }
}

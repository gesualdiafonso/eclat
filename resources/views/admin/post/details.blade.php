{{-- resources/views/admin/post/details.blade.php --}}
<x-layouts.admin>
    <div class="max-w-5xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-[#2a2185] uppercase tracking-wider mb-10">
            Editar Post
        </h1>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 text-red-800 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf
            @method('PUT')

            {{-- Nome do Post --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                <input type="text" name="name" id="name" value="{{ old('name', $post->name) }}"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185]" >
            </div>

            {{-- Slug --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185]" >
            </div>

            {{-- Autor --}}
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <input type="text" name="author" id="author" value="{{ old('author', $post->author) }}"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185]" >
            </div>

            {{-- Categoria --}}
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Categoria</label>
                <input type="text" name="category" id="category" value="{{ old('category', $post->category) }}"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185]">
            </div>

            {{-- Resumo --}}
            <div>
                <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resumen</label>
                <textarea name="resume" id="resume" rows="3"
                          class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185]" >{{ old('resume', $post->resume) }}</textarea>
            </div>

            {{-- Imagem Atual --}}
            @if($post->image)
                <div class="mb-4">
                    <p class="text-sm text-gray-600 mb-2">Imagen atual:</p>
                    <img src="{{ asset($post->image) }}" alt="Imagem do Post"
                         class="max-h-48 rounded-lg shadow-md">
                </div>
            @endif

            {{-- Upload Nova Imagem --}}
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Cambiar Imagen</label>
                <input type="file" name="image" id="image"
                       class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4
                              file:rounded-full file:border-0
                              file:text-sm file:font-semibold
                              file:bg-[#2a2185] file:text-white
                              hover:file:bg-[#00ccff]"/>
            </div>

            {{-- Conteúdo com Quill --}}
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenido</label>
                <div id="editor" class="bg-white rounded-lg border border-gray-300 min-h-[300px]">
                    {!! old('content', $post->content) !!}
                </div>
                <input type="hidden" name="content" id="content">
            </div>

            {{-- Botão Submit --}}
            <div class="flex justify-center">
                <button type="submit"
                        class="bg-[#2a2185] text-white font-semibold px-6 py-3 rounded-xl shadow-md
                               hover:bg-[#00ccff] hover:text-black transition duration-300 ease-in-out">
                    Actualizar Post
                </button>
            </div>
        </form>
    </div>

    {{-- Quill.js --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const quill = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Edite o conteúdo do post...',
                modules: {
                    toolbar: [
                        [{ header: [1, 2, 3, false] }],
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote', 'code-block'],
                        [{ list: 'ordered'}, { list: 'bullet' }],
                        [{ color: [] }, { background: [] }],
                        ['link', 'image'],
                        ['clean']
                    ]
                }
            });

            const form = document.querySelector("form");
            form.onsubmit = function() {
                document.querySelector("#content").value = quill.root.innerHTML;
            };
        });
    </script>
</x-layouts.admin>

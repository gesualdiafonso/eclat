{{-- resources/views/admin/post/create.blade.php --}}
<x-layouts.admin>
    <div class="max-w-5xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-[#2a2185] uppercase tracking-wider mb-10">
            Crear Nuevo Post
        </h1>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 text-red-800 rounded">
                <div>
                    <h2>Espere, faltan algunos campos para ser agregado</h2>
                </div>
                <div>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            {{-- Nombre --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                <input type="text" name="name" id="name"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185] px-3 py-2"
                       placeholder="Nombre del post" >
            </div>

            {{-- Slug --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                <input type="text" name="slug" id="slug"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185] px-3 py-2"
                       placeholder="slug-del-post" >
            </div>

            {{-- Autor --}}
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <input type="text" name="author" id="author"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185] px-3 py-2"
                       placeholder="Nombre del autor, en caso de Éclat, informar sector" >
            </div>

            {{-- Categoria --}}
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Categoria</label>
                <input type="text" name="category" id="category"
                       class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185] px-3 py-2"
                       placeholder="Categoria que el post hace referencia">
            </div>

            {{-- Resumo --}}
            <div>
                <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resumen</label>
                <textarea name="resume" id="resume" rows="3"
                          class="w-full rounded-lg border-gray-300 focus:ring-[#2a2185] focus:border-[#2a2185] px-3 py-2"
                          placeholder="Resumen sobre el contenido" ></textarea>
            </div>

            {{-- Imagem --}}
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Imagem do Post</label>
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
                <div id="editor" class="bg-white rounded-lg border border-gray-300 min-h-[300px] px-3 py-2"></div>
                <input type="hidden" name="content" id="content">
            </div>

            {{-- Botão Submit --}}
            <div class="flex justify-center">
                <button type="submit"
                        class="bg-[#2a2185] text-white font-semibold px-6 py-3 rounded-xl shadow-md
                               hover:bg-[#00ccff] hover:text-black transition duration-300 ease-in-out">
                    Publicar Post
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
                placeholder: 'Escriba aquí el contenido del post...',
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

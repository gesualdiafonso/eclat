{{-- resources/views/admin/post/details.blade.php --}}
<x-layouts.admin>
    <div class="max-w-5xl mx-auto py-15">
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
                        class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                        focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200" >
            </div>

            {{-- Slug --}}
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
                        class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                        focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200" >

            {{-- Autor --}}
            <div>
                <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <input type="text" name="author" id="author" value="{{ old('author', $post->author) }}"
                        class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                        focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200" >
            </div>

            {{-- Categoria --}}
            <div>
                <label for="categoria_fk" class="block text-sm font-medium text-gray-700 mb-1">Categoria</label>
                <select name="categoria_fk" id="categoria_fk"
                        class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                        focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200"  required>
                        <option value="">-- Selecione uma categoria --</option>
                        @foreach ($categorias as $cat)
                            <option value="{{ $cat->categoria_id }}"
                                {{ (int) old('categoria_fk', $post->categoria_fk) === (int) $cat->categoria_id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                </select>
            </div>


            {{-- Resumo --}}
            <div>
                <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resumen</label>
                <textarea name="resume" id="resume" rows="3"
                            class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                            focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200" >{{ old('resume', $post->resume) }}</textarea>
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
                class="w-full border border-gray-300 bg-white/90 text-gray-900 p-2
                focus:border-[#2a2185] focus:ring-2 focus:ring-[#00ccff] focus:ring-offset-0 transition duration-200" >
            </div>

            {{-- Conteúdo com Quill --}}
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Contenido</label>

                {{-- O editor (não insira conteúdo aqui!) --}}
                <div id="editor" class="bg-white rounded-lg border border-gray-600 min-h-[300px]"></div>

                {{-- Input oculto que enviará o conteúdo --}}
                <input type="hidden" name="content" id="content" value="{{ old('content', $post->content) }}">
            </div>


            {{-- Botão Submit --}}
            <div class="flex justify-center">
                <button type="submit"
                        class="bg-[#2a2185] text-black font-semibold px-6 py-3 rounded-xl shadow-md hover:bg-[#00ccff] hover:text-black transition duration-300 ease-in-out">
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
                        [{ list: 'ordered' }, { list: 'bullet' }],
                        [{ color: [] }, { background: [] }],
                        ['link', 'image'],
                        ['clean']
                    ]
                }
            });

            // Inicializa o conteúdo do editor com o valor vindo do banco
            const hiddenInput = document.querySelector("#content");
            if (hiddenInput.value) {
                quill.root.innerHTML = hiddenInput.value;
            }

            // Antes de enviar, copia o HTML atual pro campo hidden
            const form = document.querySelector("form");
            form.addEventListener("submit", function (e) {
                hiddenInput.value = quill.root.innerHTML.trim();

                if (hiddenInput.value === '' || hiddenInput.value === '<p><br></p>') {
                    e.preventDefault();
                    alert('O campo de conteúdo não pode estar vazio.');
                }
            });
        });
    </script>
</x-layouts.admin>

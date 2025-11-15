<x-layouts.login>
    <section class="flex items-center justify-center min-h-screen bg-black relative">

        <!-- Logo -->
        <div class="fixed top-10 left-24 z-10">
            <x-nav-link route="home">
                <span class="uppercase font-bold font-serif text-5xl text-white">Éclat</span>
            </x-nav-link>
        </div>

        <!-- Background -->
        <div class="relative w-full h-full">
            <img src="{{ asset('assets/images/eclat_background/1.jpg') }}" alt="" class="w-full h-full object-cover">
        </div>

        <!-- Card -->
        <div class="absolute bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Registrar</h1>

            <form method="POST" action="{{ route('auth.register.process') }}">
                @csrf

                @if ($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 p-4 mb-4 text-red-700">
                        <ul class="list-disc ml-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                    <input type="text" name="name"
                           class="mt-1 w-full border-b-2 border-black h-10 focus:border-black focus:bg-transparent"
                           required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email"
                           class="mt-1 w-full border-b-2 border-black h-10 focus:border-black focus:bg-transparent"
                           required>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password"
                           class="mt-1 w-full border-b-2 border-black h-10"
                           required>
                </div>

                <!-- Confirm -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700">Confirmar Password</label>
                    <input type="password" name="password_confirmation"
                           class="mt-1 w-full border-b-2 border-black h-10"
                           required>
                </div>

                <button type="submit"
                        class="w-full border-2 border-black text-black font-semibold py-2 hover:bg-black hover:text-white transition-all duration-500">
                    Crear Cuenta
                </button>
            </form>
        </div>
    </section>
</x-layouts.login>

<x-layouts.login>
    <section class="flex items-center justify-center min-h-screen bg-black relative">
        <div class="fixed top-10 left-24 z-10">
            <x-nav-link route="home"><span class="uppercase font-bold font-serif text-5xl text-white">Éclat</span></x-nav-link>
        </div>
        <div class="relative w-full h-full">
            <img src="{{ asset('assets/images/eclat_background/1.jpg') }}" alt="">
        </div>
        <div class="absolute bg-white p-8 h-auto rounded-lg shadow-md w-full max-w-md ">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

            <form method="POST" action="{{ route('auth.login.process') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                           class="mt-1 w-full border-b-2 border-black shadow-sm h-10 focus:border-black focus:border-2 focus:bg-transparent"
                           required autofocus>
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password"
                           class="mt-1 w-full border-b-2 border-black shadow-sm h-10 focus:border-black focus:border-2 focus:bg-transparent"
                           required>
                    @error('password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col gap-5">
                    <!-- Submit -->
                    <button type="submit"
                    class="w-full border-2 border-black text-black font-semibold py-2 px-4 hover:text-white hover:bg-black transition-all duration-500">
                        Entrar
                    </button>

                    <!-- Register Link -->
                    <x-nav-link route="auth.register"
                            class="w-full border-2 border-black text-black font-semibold py-2 px-4 hover:text-white hover:bg-black transition-all duration-500 text-center"
                    s>
                        <span class="text-center">Registrar</span>
                    </x-nav-link>
                </div>
            </form>
        </div>
    </section>
</x-layouts.login>
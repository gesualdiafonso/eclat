<x-layouts.login>
    <section class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center text-[#2a2185]">Login</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                           class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-[#2a2185] focus:border-[#2a2185]"
                           required autofocus>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" name="password" id="password"
                           class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-[#2a2185] focus:border-[#2a2185]"
                           required>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full bg-[#2a2185] text-white font-semibold py-2 px-4 rounded-md hover:bg-[#1f1a63]">
                    Entrar
                </button>
            </form>
        </div>
    </section>
</x-layouts.login>
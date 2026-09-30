<x-layout>
    <main class="py-10">




        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 st-4">
            <h1 class=font-bold text 3xl mb-4>
                Faça login para acompanhar seus hábitos e progresso!
            </h1>
            <p>
                Insira seus dados para acessar.
            </p>
            <form action="/login" method="POST" class="max-w-md mx-auto mt-8 flex flex-col">
                @csrf

                @error('email')
                <p class="text-red-500 text-sm mt-2">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">
                        Email:
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="exemplo@email.com"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">
                        Senha:
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="••••••••"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required>
                </div>

                <button
                    type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded mx-auto block">
                    Login
                </button>
            </form>

        </section>
    </main>
</x-layout>
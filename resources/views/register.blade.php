<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2">

            <h1 class="font-bold text-3xl mb-4">
                Crie sua conta
            </h1>

            <p>
                Cadastre-se para acompanhar seus hábitos e progresso!
            </p>

            <form
                action="{{ route('register.store') }}"
                method="POST"
                class="max-w-md mx-auto mt-8 flex flex-col"
            >
                @csrf

                {{-- Nome --}}
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">
                        Nome:
                    </label>

                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Digite seu nome"
                        value="{{ old('name') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required
                    >

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- E-mail --}}
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">
                        E-mail:
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="exemplo@email.com"
                        value="{{ old('email') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required
                    >

                    @error('email')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Senha --}}
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">
                        Senha:
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Crie uma senha"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required
                    >

                    @error('password')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Repetir senha --}}
                <div class="mb-6">
                    <label
                        for="password_confirmation"
                        class="block text-gray-700 font-bold mb-2"
                    >
                        Repita a senha:
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        placeholder="Digite a senha novamente"
                        class="w-full border border-gray-300 rounded px-3 py-2"
                        required
                    >
                </div>

                {{-- Botão --}}
                <button
                    type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded mx-auto block"
                >
                    Cadastrar
                </button>

                {{-- Link para login --}}
                <p class="text-center text-gray-600 mt-4">
                    Já tem uma conta?

                    <a
                        href="{{ route('site.login') }}"
                        class="underline hover:opacity-75"
                    >
                        Faça login
                    </a>
                </p>

            </form>

        </section>
    </main>
</x-layout>

<x-layout>
    <main class="py-10">   
    <h1>   
        Veja seus habitos e acompanhe seu progresso!
    </h1>

    @auth
        <section>
            <p class="text-center mt-4">
                Bem-vindo, {{ auth()->user()->name }}!
            </p>
        </section>
    @endauth

</main>

</x-layout>
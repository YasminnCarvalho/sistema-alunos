<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-4">
                    {{ $aluno->nome }}
                </h1>

                <p>Email: {{ $aluno->email }}</p>

                <p>Curso: {{ $aluno->curso->nome }}</p>

                <a href="{{ route('alunos.index') }}" class="underline">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
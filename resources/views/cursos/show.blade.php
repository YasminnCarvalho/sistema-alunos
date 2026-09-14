<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-4">
                    {{ $curso->nome }}
                </h1>

                <p class="mb-6">
                    {{ $curso->descricao }}
                </p>

                <h2 class="text-xl font-bold mb-4">
                    Alunos matriculados
                </h2>

                @forelse($curso->alunos as $aluno)
                    <div class="border p-3 mb-2">
                        {{ $aluno->nome }}
                    </div>
                @empty
                    <p>
                        Nenhum aluno neste curso.
                    </p>
                @endforelse

                <a
                    href="{{ route('cursos.index') }}"
                    class="underline"
                >
                    Voltar
                </a>

            </div>
        </div>
    </div>
</x-app-layout>
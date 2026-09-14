<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <div class="flex justify-between mb-6">
                    <h1 class="text-2xl font-bold">
                        Cursos
                    </h1>

                    @if(auth()->user()->role->value === 'admin')
                        <a href="{{ route('cursos.create') }}" class="underline">
                            Novo curso
                        </a>
                    @endif
                </div>

                @if(session('success'))
                    <div class="mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @forelse($cursos as $curso)
                    <div class="border p-4 mb-4">

                        <h2 class="font-bold">
                            {{ $curso->nome }}
                        </h2>

                        <p>
                            {{ $curso->descricao }}
                        </p>

                        <p>
                            Alunos: {{ $curso->alunos_count }}
                        </p>

                        <div class="mt-3">

                            <a
                                href="{{ route('cursos.show', $curso) }}"
                                class="underline"
                            >
                                Ver
                            </a>

                            @if(auth()->user()->role->value === 'admin')
                                <a
                                    href="{{ route('cursos.edit', $curso) }}"
                                    class="underline ml-4"
                                >
                                    Editar
                                </a>

                                <form
                                    action="{{ route('cursos.destroy', $curso) }}"
                                    method="POST"
                                    class="inline ml-4"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="underline">
                                        Excluir
                                    </button>
                                </form>
                            @endif

                        </div>
                    </div>
                @empty
                    <p>
                        Nenhum curso cadastrado.
                    </p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <div class="flex justify-between mb-6">
                    <h1 class="text-2xl font-bold">Alunos</h1>

                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('alunos.create') }}" class="underline">
                            Novo aluno
                        </a>
                    @endif
                </div>

                @if(session('success'))
                    <div class="mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="space-y-4">
                    @forelse($alunos as $aluno)
                        <div class="border p-4">
                            <h2 class="font-bold">{{ $aluno->nome }}</h2>

                            <p>{{ $aluno->email }}</p>

                            <p>
                                Curso:
                                {{ $aluno->curso->nome }}
                            </p>

                            <a href="{{ route('alunos.show', $aluno) }}" class="underline">
                                Ver
                            </a>

                            @if(auth()->user()->role === 'admin')
                                <a href="{{ route('alunos.edit', $aluno) }}" class="underline ml-4">
                                    Editar
                                </a>

                                <form
                                    action="{{ route('alunos.destroy', $aluno) }}"
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
                    @empty
                        <p>Nenhum aluno cadastrado.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
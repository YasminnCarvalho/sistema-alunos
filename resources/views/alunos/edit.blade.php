<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-6">Editar aluno</h1>

                @if($errors->any())
                    <div class="mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('alunos.update', $aluno) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nome">Nome</label>

                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            value="{{ old('nome', $aluno->nome) }}"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="email">Email</label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email', $aluno->email) }}"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="curso_id">Curso</label>

                        <select name="curso_id" id="curso_id" required>
                            @foreach($cursos as $curso)
                                <option
                                    value="{{ $curso->id }}"
                                    @selected($aluno->curso_id == $curso->id)
                                >
                                    {{ $curso->nome }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
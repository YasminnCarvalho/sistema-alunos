<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-6">
                    Editar curso
                </h1>

                @if($errors->any())
                    <div class="mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('cursos.update', $curso) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="nome">
                            Nome
                        </label>

                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            value="{{ old('nome', $curso->nome) }}"
                            required
                        >
                    </div>

                    <div class="mb-4">
                        <label for="descricao">
                            Descricao
                        </label>

                        <textarea
                            name="descricao"
                            id="descricao"
                        >{{ old('descricao', $curso->descricao) }}</textarea>
                    </div>

                    <button type="submit">
                        Atualizar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
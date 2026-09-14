<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <h1 class="text-2xl font-bold mb-6">
                    Novo curso
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

                <form action="{{ route('cursos.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="nome">
                            Nome
                        </label>

                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            value="{{ old('nome') }}"
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
                        >{{ old('descricao') }}</textarea>
                    </div>

                    <button type="submit">
                        Salvar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
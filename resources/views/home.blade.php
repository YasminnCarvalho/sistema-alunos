<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Sistema de Alunos</h1>

                    <p class="mb-4">
                        Bem-vindo ao sistema de gerenciamento de alunos e cursos.
                    </p>

                    @auth
                        <a href="{{ route('alunos.index') }}" class="underline">
                            Ver alunos
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="underline">
                            Fazer login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
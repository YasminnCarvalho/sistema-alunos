<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        Aluno::create([
            'nome' => 'Joao Silva',
            'email' => 'joao@example.com',
            'curso_id' => 1,
        ]);

        Aluno::create([
            'nome' => 'Maria Souza',
            'email' => 'maria@example.com',
            'curso_id' => 2,
        ]);

        Aluno::create([
            'nome' => 'Carlos Mendes',
            'email' => 'carlos@example.com',
            'curso_id' => 3,
        ]);

        Aluno::create([
            'nome' => 'Ana Ribeiro',
            'email' => 'ana@example.com',
            'curso_id' => 1,
        ]);

        Aluno::create([
            'nome' => 'Lucas Alves',
            'email' => 'lucas@example.com',
            'curso_id' => 2,
        ]);
    }
}
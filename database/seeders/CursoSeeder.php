<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        Curso::create([
            'nome' => 'Engenharia de Software',
            'descricao' => 'Curso de Engenharia de Software',
        ]);

        Curso::create([
            'nome' => 'Analise e Desenvolvimento de Sistemas',
            'descricao' => 'Curso de Analise e Desenvolvimento de Sistemas',
        ]);

        Curso::create([
            'nome' => 'Ciencia da Computacao',
            'descricao' => 'Curso de Ciencia da Computacao',
        ]);
    }
}
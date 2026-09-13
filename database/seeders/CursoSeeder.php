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
            'descricao' => 'Curso de desenvolvimento e engenharia de software.',
        ]);

        Curso::create([
            'nome' => 'Análise e Desenvolvimento de Sistemas',
            'descricao' => 'Curso voltado para desenvolvimento de sistemas.',
        ]);

        Curso::create([
            'nome' => 'Ciência da Computação',
            'descricao' => 'Curso voltado para computação e tecnologia.',
        ]);
    }
}
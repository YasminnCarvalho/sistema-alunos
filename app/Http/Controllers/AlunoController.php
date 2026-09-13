<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('curso')->latest()->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Aluno::create($request->validated());

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno criado com sucesso.');
    }

    public function show(Aluno $aluno)
    {
        $aluno->load('curso');

        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $aluno->update($request->validated());

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno atualizado com sucesso.');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno excluído com sucesso.');
    }
}
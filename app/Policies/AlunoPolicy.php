<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Aluno $aluno): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->role === Role::ADMIN;
    }

    public function update(User $user, Aluno $aluno): bool
    {
        return $user->role === Role::ADMIN;
    }

    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === Role::ADMIN;
    }
}
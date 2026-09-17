# Sistema de Alunos

Sistema web desenvolvido em Laravel para gerenciamento de alunos e cursos.

## Tecnologias utilizadas

- PHP
- Laravel
- PostgreSQL
- Blade
- Eloquent ORM
- Laravel Breeze
- Tailwind CSS
- Git e GitHub

## Funcionalidades

- Cadastro e login de usuários
- Autenticação com Laravel Breeze
- Controle de acesso por função
- Gerenciamento de alunos
- Gerenciamento de cursos
- Cadastro de alunos vinculados a cursos
- Visualização de alunos e cursos
- Edição e exclusão de registros
- Validação de dados
- Relacionamento entre alunos e cursos
- Proteção de rotas administrativas

## Estrutura principal

```text
app/
├── Enums/
├── Http/
│   ├── Controllers/
│   ├── Middleware/
│   └── Requests/
├── Models/
└── Policies/

database/
├── migrations/
└── seeders/

resources/
└── views/
    ├── alunos/
    ├── cursos/
    ├── layouts/
    └── dashboard.blade.php

routes/
├── web.php
└── auth.php
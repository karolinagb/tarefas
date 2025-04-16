<?php

namespace App\Repositories;

use App\Models\Tarefa;

class TarefasRepository
{
    public function create(string $descricao)
    {
        return Tarefa::create([
            'descricao' => $descricao
        ]);
    }
}

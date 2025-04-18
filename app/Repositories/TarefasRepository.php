<?php

namespace App\Repositories;

use App\Models\Tarefa;
use Illuminate\Database\Eloquent\Collection;

class TarefasRepository
{
    public function create(string $descricao)
    {
        return Tarefa::create([
            'descricao' => $descricao
        ]);
    }

    public function find(int $id): Tarefa
    {
        return Tarefa::findOrFail($id);
    }

    public function getAll(): Collection
    {
        return Tarefa::orderBy('id')->get();
    }

    public function update(int $id, string $descricao)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update([
            'descricao' => $descricao
        ]);
        return $tarefa;
    }

   
}

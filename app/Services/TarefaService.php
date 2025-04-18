<?php

namespace App\Services;

use App\Models\Tarefa;
use App\Repositories\TarefasRepository;
use Illuminate\Database\Eloquent\Collection;

class TarefaService
{
    public function __construct(
        protected TarefasRepository $tarefas_repository)
    {}

    public function create(string $descricao)
    {
        $this->tarefas_repository->create($descricao);
    }

    public function find(int $id): Tarefa
    {
        return $this->tarefas_repository->find($id);
    }

    public function getAll(): Collection
    {
        return $this->tarefas_repository->getAll();
    }

    public function update(int $id, string $descricao)
    {
        return $this->tarefas_repository->update($id, $descricao);
    }
}




<?php

namespace App\Services;

use App\Repositories\TarefasRepository;

class TarefaService
{
    public function __construct(
        protected TarefasRepository $tarefas_repository)
    {}

    public function create(string $descricao)
    {
        $this->tarefas_repository->create($descricao);
    }
}




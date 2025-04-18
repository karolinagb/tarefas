<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use App\Services\TarefaService;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\TarefaStoreRequest;

class TarefaController extends Controller
{
    public function __construct(protected TarefaService $tarefa_service)
    {
        # code...
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefas = $this->tarefa_service->getAll();
        return view('tarefas.index', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefaStoreRequest $tarefa_store_request)
    {
        $this->tarefa_service->create($tarefa_store_request->descricao);
        return to_route('tarefas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarefa = $this->tarefa_service->find($id);
        return view('tarefas.show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarefa = $this->tarefa_service->find($id);
        return view('tarefas.edit', ['tarefa' => $tarefa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TarefaStoreRequest $request, string $id)
    {
        $tarefa = $this->tarefa_service->update($id, $request->descricao);
        return to_route('tarefas.show', ['id' => $tarefa->id])->with('success', 'Tarefa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $this->tarefa_service->destroy($id);
        return to_route('tarefas.index')->with('success', 'Tarefa excluída com sucesso!');
    }
}

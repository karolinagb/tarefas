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
        //
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
        return view('tarefas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

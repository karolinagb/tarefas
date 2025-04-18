@extends('layout')
@section('title', 'Editar Tarefa')
@section('content')
    <h1>Editar Tarefa</h1>

    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="{{ old('descricao', $tarefa->descricao) }}" required>
        </div>

        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('tarefas.index') }}">Voltar para a lista de tarefas</a>
    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir tarefa</button>
    </form>
@endsection

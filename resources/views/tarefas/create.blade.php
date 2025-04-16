
@extends('layout')

@section('title', 'Adicionar tarefa')

@section('content')
    <form action="{{ route('tarefas.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
        <label for="descricao">Descrição da tarefa</label>
        <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Digite...">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection

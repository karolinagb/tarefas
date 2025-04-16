
@extends('layout')

@section('title', 'Adicionar tarefa')

@section('content')
    <form action="{{ route('tarefas.store') }}" method="post">
        @csrf
        <div class="form-group">
        <label name="descricao" for="descricao">Descrição da tarefa</label>
        <input type="text" class="form-control" id="descricao" placeholder="Digite...">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection

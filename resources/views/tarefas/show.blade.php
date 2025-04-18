@extends('layout')

@section('title', 'Detalhes da tarefa')

@section('content')
    <h1>Detalhes da tarefa</h1>
    <p><strong>ID:</strong> {{ $tarefa->id }}</p>
    <p><strong>Descrição:</strong> {{ $tarefa->descricao }}</p>
    <p><strong>Criada em:</strong> {{ $tarefa->created_at }}</p>
    <p><strong>Atualizada em:</strong> {{ $tarefa->updated_at }}</p>

    <a href="{{ route('tarefas.index') }}">Voltar para a lista de tarefas</a>
    <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar tarefa</a>
    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="post" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir tarefa</button>
    </form>
@endsection
@section('scripts')
    <script>
        // Adicione aqui qualquer script JavaScript necessário para a página
    </script>
@endsection
@section('styles')
    <style>
        /* Adicione aqui qualquer estilo CSS necessário para a página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
    </style>

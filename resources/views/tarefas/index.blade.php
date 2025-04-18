@extends('layout')
@section('title', 'Lista de Tarefas')
@section('content')
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tarefas.create') }}">Criar nova tarefa</a>

    @if ($tarefas->isEmpty())
        <p>Nenhuma tarefa encontrada.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Criada em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                    <tr>
                        <td>{{ $tarefa->id }}</td>
                        <td>{{ $tarefa->descricao }}</td>
                        <td>{{ $tarefa->created_at }}</td>
                        <td>
                            <a href="{{ route('tarefas.show', $tarefa->id) }}">Ver</a>
                            <a href="{{ route('tarefas.edit', $tarefa->id) }}">Editar</a>
                            <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    @if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
@endsection

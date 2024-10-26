@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Fabricantes</h1>

        <a href="{{ route('fabricantes.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Fabricante</a>

        <!-- Formulário de busca -->
        <form action="{{ route('fabricantes.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou país" value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($fabricantes->count())
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>País</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fabricantes as $fabricante)
                    <tr>
                        <td>{{ $fabricante->id }}</td>
                        <td>{{ $fabricante->nome }}</td>
                        <td>{{ $fabricante->pais }}</td>
                        <td>
                            <a href="{{ route('fabricantes.edit', $fabricante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('fabricantes.destroy', $fabricante->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este fabricante?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum fabricante cadastrado.</p>
        @endif
    </div>
@endsection

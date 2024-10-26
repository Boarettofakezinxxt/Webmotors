@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vendedores</h1>

        <a href="{{ route('vendedores.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Vendedor</a>

        <!-- Formulário de busca -->
        <form action="{{ route('vendedores.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome, email ou telefone" value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($vendedores->count())
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendedores as $vendedor)
                    <tr>
                        <td>{{ $vendedor->id }}</td>
                        <td>{{ $vendedor->nome }}</td>
                        <td>{{ $vendedor->email }}</td>
                        <td>{{ $vendedor->telefone }}</td>
                        <td>{{ $vendedor->endereco }}</td>
                        <td>
                            <a href="{{ route('vendedores.edit', $vendedor->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este vendedor?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum vendedor cadastrado.</p>
        @endif
    </div>
@endsection

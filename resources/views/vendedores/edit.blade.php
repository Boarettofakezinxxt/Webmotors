@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Vendedor</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Certifique-se de que o método é PUT e o ID do vendedor está sendo passado corretamente -->
        <form action="{{ route('vendedores.update', $vendedor->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Garante que o método é PUT -->

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $vendedor->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $vendedor->email }}" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" value="{{ $vendedor->telefone }}">
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="{{ $vendedor->endereco }}">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Vendedor</button>
            <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection

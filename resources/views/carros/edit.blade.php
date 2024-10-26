@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Carro</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo.<br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('carros.update', $carro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome', $carro->nome) }}" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" value="{{ old('modelo', $carro->modelo) }}" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" id="ano" value="{{ old('ano', $carro->ano) }}" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="number" step="0.01" name="preco" class="form-control" id="preco" value="{{ old('preco', $carro->preco) }}" required>
            </div>

            <div class="mb-3">
                <label for="fabricante_id" class="form-label">Fabricante</label>
                <select name="fabricante_id" id="fabricante_id" class="form-select" required>
                    @foreach($fabricantes as $fabricante)
                        <option value="{{ $fabricante->id }}" {{ $carro->fabricante_id == $fabricante->id ? 'selected' : '' }}>
                            {{ $fabricante->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="vendedor_id" class="form-label">Vendedor</label>
                <select name="vendedor_id" id="vendedor_id" class="form-select" required>
                    @foreach($vendedores as $vendedor)
                        <option value="{{ $vendedor->id }}" {{ $carro->vendedor_id == $vendedor->id ? 'selected' : '' }}>
                            {{ $vendedor->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Carro</button>
            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection

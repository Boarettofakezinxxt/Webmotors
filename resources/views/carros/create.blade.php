@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Novo Carro</h1>

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

        <form action="{{ route('carros.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome') }}" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" value="{{ old('modelo') }}" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" id="ano" value="{{ old('ano') }}" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="number" step="0.01" name="preco" class="form-control" id="preco" value="{{ old('preco') }}" required>
            </div>

            <div class="mb-3">
                <label for="fabricante_id" class="form-label">Fabricante</label>
                <select name="fabricante_id" id="fabricante_id" class="form-select" required>
                    <option value="">Selecione o Fabricante</option>
                    @foreach($fabricantes as $fabricante)
                        <option value="{{ $fabricante->id }}" {{ old('fabricante_id') == $fabricante->id ? 'selected' : '' }}>
                            {{ $fabricante->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="vendedor_id" class="form-label">Vendedor</label>
                <select name="vendedor_id" id="vendedor_id" class="form-select" required>
                    <option value="">Selecione o Vendedor</option>
                    @foreach($vendedores as $vendedor)
                        <option value="{{ $vendedor->id }}" {{ old('vendedor_id') == $vendedor->id ? 'selected' : '' }}>
                            {{ $vendedor->nome }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" id="descricao" rows="3">{{ old('descricao') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" class="form-control" id="imagem" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Carro</button>
        </form>
    </div>
@endsection

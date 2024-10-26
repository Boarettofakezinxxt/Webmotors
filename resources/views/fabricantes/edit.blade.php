@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Fabricante</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('fabricantes.update', $fabricante->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="{{ $fabricante->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" name="pais" class="form-control" id="pais" value="{{ $fabricante->pais }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('fabricantes.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
@endsection

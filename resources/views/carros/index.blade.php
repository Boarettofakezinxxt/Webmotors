@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Carros para Venda</h1>
            <a href="{{ route('carros.create') }}" class="btn btn-primary">Cadastrar Novo Carro</a>
        </div>

        <!-- Formulário de busca -->
        <form action="{{ route('carros.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou modelo" value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($carros->count())
            <div class="row">
                @foreach($carros as $carro)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            @if($carro->imagem)
                                <img src="{{ asset('storage/' . $carro->imagem) }}" class="card-img-top" alt="{{ $carro->nome }}">
                            @else
                                <img src="{{ asset('images/default-car.png') }}" class="card-img-top" alt="Imagem Padrão">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $carro->nome }} - {{ $carro->modelo }}</h5>
                                <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($carro->preco, 2, ',', '.') }}</p>
                                <p class="card-text"><strong>Ano:</strong> {{ $carro->ano }}</p>
                                <p class="card-text"><strong>Fabricante:</strong> {{ $carro->fabricante->nome }}</p>
                                <p class="card-text"><strong>Vendedor:</strong> {{ $carro->vendedor->nome }}</p>
                                <p class="card-text">{{ Str::limit($carro->descricao, 100) }}</p>

                                <!-- Botões de ações alinhados -->
                                <div class="d-flex justify-content-between">
                                    <!-- Botão de contato -->
                                    <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#contatoModal{{ $carro->id }}">
                                        Contato
                                    </button>

                                    <!-- Botão de edição -->
                                    <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning btn-sm me-1">Editar</a>

                                    <!-- Formulário de exclusão -->
                                    <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para mostrar o contato do vendedor -->
                    <div class="modal fade" id="contatoModal{{ $carro->id }}" tabindex="-1" aria-labelledby="contatoModalLabel{{ $carro->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contatoModalLabel{{ $carro->id }}">Contato do Vendedor</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Nome:</strong> {{ $carro->vendedor->nome }}</p>
                                    <p><strong>Email:</strong> {{ $carro->vendedor->email }}</p>
                                    <p><strong>Telefone:</strong> {{ $carro->vendedor->telefone }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Nenhum carro cadastrado para venda.</p>
        @endif
    </div>
@endsection

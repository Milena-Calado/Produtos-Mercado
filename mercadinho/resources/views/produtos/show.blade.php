@extends('layouts.app')

@section('slot')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Detalhes do Produto
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">Descrição: {{ $produto->descricao }}</p>
                        <p class="card-text">Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                        <!-- Adicione outros detalhes do produto conforme necessário -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
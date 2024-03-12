@extends('layouts.app')

@section('slot')
    <h2>{{ isset($produto) ? 'Editar Produto' : 'Novo Produto' }}</h2>
    <form action="{{ isset($produto) ? route('produtos.update', $produto) : route('produtos.store') }}" method="POST">
        @csrf
        @if (isset($produto))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" value="{{ isset($produto) ? $produto->descricao : old('descricao') }}">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" name="categoria" id="categoria" class="form-control" value="{{ isset($produto) ? $produto->categoria : old('categoria') }}">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" class="form-control" value="{{ isset($produto) ? $produto->preco : old('preco') }}">
        </div>
        <div class="form-group">
            <label for="quantidade_estoque">Quantidade em Estoque</label>
            <input type="text" name="quantidade_estoque" id="quantidade_estoque" class="form-control" value="{{ isset($produto) ? $produto->quantidade_estoque : old('quantidade_estoque') }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
<!-- resources/views/produtos/create.blade.php -->

@extends('layouts.app')

@section('slot')
    <h1>Criar Novo Produto</h1>

    <form method="POST" action="{{ route('produtos.store') }}">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>
        </div>

        <div>
            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" required>
        </div>

        <!-- Outros campos do formulário -->

        <button type="submit">Salvar</button>
    </form>
@endsection
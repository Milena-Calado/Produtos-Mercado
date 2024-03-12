@extends('layouts.app')

@section('slot')
    <h2>Listagem de Produtos</h2>
    <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-2">Novo Produto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Quantidade em Estoque</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ $produto->categoria }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->quantidade_estoque }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
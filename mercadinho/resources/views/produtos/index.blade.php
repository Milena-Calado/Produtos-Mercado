<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Listagem de Produtos') }}
   

  <div class="py-12">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-8">
          <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-2">Novo Produto</a>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-hover">
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

         
        </div>
      </div>
    </div>
  </div>
  </h2>
  </x-slot>
</x-app-layout>
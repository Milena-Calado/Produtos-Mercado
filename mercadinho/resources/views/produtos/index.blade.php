<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem de Produtos') }}
        </h2>
        <div class="py-12">
            <div class="container">
                <div class="row justify-content-between">                    
                        <a href="{{ route('produtos.create') }}" class="inline-block bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">Cadastrar Novo Produto</a>
                    </div>                                           
                    </div>
                </div>
         
        <div class="py-150">
        <div class="container mx-auto px-4 sm:px-4 lg:px-5">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 py-5 sm:px-0">
                    <h3 class="text-lg leading-6 font-medium text-gray-200">Tabela de Produtos Cadastrados</h3>
                </div>
                <div class="border-t border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">ID</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">Descrição</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">Categoria</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">Preço</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">Quantidade em Estoque</th>
                                <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider border">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            @foreach ($produtos as $produto)
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">{{ $produto->id }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">{{ $produto->descricao }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">{{ $produto->categoria }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">{{ $produto->quantidade }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-center border">
                                    <a href="{{ route('produtos.edit', $produto) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Excluir</button>
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
    </x-slot>
</x-app-layout>
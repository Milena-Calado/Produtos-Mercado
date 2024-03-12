<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Listing') }}
        </h2>
        
        <div class="py-6">           
        <a href="{{ route('produtos.create') }}">
            <x-primary-button>{{ __('Register new product') }}</x-primary-button>
        </a>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ __('Saved.') }}</p>
        @endif


        </div>        
            
            <h3 class="text-lg font-medium text-gray-200 px-0 py-0">Table of Registered Products</h3>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">ID</th>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">Description</th>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">Category</th>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">Price</th>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">Quantity in stock</th>
                        <th scope="col" class="px-4 py-3 text-center text-xs font-medium text-gray-500 uppercase border">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    @foreach ($produtos as $produto)
                    <tr>
                        <td class="px-4 py-3 text-center border">{{ $produto->id }}</td>
                        <td class="px-4 py-3 text-center border">{{ $produto->descricao }}</td>
                        <td class="px-4 py-3 text-center border">{{ $produto->categoria }}</td>
                        <td class="px-4 py-3 text-center border">R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td class="px-4 py-3 text-center border">{{ $produto->quantidade }}</td>
                        <td class="px-4 py-3 text-center border">
                            <a href="{{ route('produtos.edit', $produto) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{ route('produtos.destroy', $produto) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        

    </x-slot>
</x-app-layout>
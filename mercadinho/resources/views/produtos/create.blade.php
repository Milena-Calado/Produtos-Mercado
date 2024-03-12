@extends('layouts.app')

@section('slot')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-semibold mb-4">Create new product</h1>

    <form method="POST" action="{{ route('produtos.store') }}" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="descricao" class="block mb-2">Description:</label>
            <textarea id="descricao" name="descricao" required class="w-1/2 px-3 py-2 border rounded focus:outline-none focus:border-blue-500 "></textarea>
        </div>

        <div class="mb-4">
            <label for="categoria" class="block mb-2">Category:</label>
            <input type="text" id="categoria" name="categoria" required class="w-1/2 px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="preco" class="block mb-2">Price:</label>
            <input type="number" id="preco" name="preco" required class="w-1/2 px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="quantidade" class="block mb-2">Quantity in stock:</label>
            <input type="number" id="quantidade" name="quantidade" required class="w-1/2 px-3 py-2 border rounded focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex items-center justify mt-8">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

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
    </form>
</div>
@endsection

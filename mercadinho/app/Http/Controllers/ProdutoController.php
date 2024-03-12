<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{   

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return response()->view('produtos.show', compact('produto'));
    }
        
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric',
            'quantidade_estoque' => 'required|integer',
        ]);

        $produto = new Produto();        
        $produto->descricao = $request->input('descricao');
        $produto->categoria = $request->input('categoria');
        $produto->preco = $request->input('preco');
        $produto->quantidade_estoque = $request->input('quantidade_estoque');
        
        $produto->save();

        Produto::create($request->all());

        return redirect()->route('produtos.index');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric',
            'quantidade_estoque' => 'required|integer',
        ]);

        $produto->update($request->all());

        return redirect()->route('produtos.index');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
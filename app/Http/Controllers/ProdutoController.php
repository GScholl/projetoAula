<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function cadastro()
    {
        return view("produtos.cadastro");
    }

    public function index()
    {
        $produtos = Produto::all();
        return view("produtos.index", compact("produtos"));
    }

    public function editar($id)
    {

        $produto =  Produto::where('id', '=', $id)->first();
        return view("produtos.alteracao", compact('produto'));
    }

    public function edita(Request $request)
    {

        $produto = Produto::find($request->id);


        $produto->id = $request->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->valor = $request->valor;
        $produto->categoria = $request->categoria;
        $produto->uf_origem = $request->uf_origem;
        $produto->save();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto editado com sucesso!');
    }
    public function excluir($id)
    {
        $produto = Produto::find($id);
        if ($produto->delete()) {

            return redirect()->route('produtos.index')->with("sucesso", "Produto Excluido com sucesso");
        }

        return redirect()->route('produtos.index')->with("erro", "Houve um erro ao excluir o produto");
    }
    public function novo(Request $request)
    {

        $produto = new Produto();
        $produto->id = $request->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->valor = $request->valor;
        $produto->categoria = $request->categoria;
        $produto->uf_origem = $request->uf_origem;
        if ($produto->save()) {
            return redirect()->route('produtos.index')->with("sucesso", "Produto Inserido com sucesso");
        } else {
            return redirect()->route('produtos.index')->with("erro", "Produto Inserido com sucesso");
        }

    }
}

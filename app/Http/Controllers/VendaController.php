<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Venda;

class VendaController extends Controller
{

    public function editar($id){


    }

    public function vendaPorUsuario($id){

        $usuario = Usuario::find($id);

        if(!$usuario){
            return redirect()->route('vendas.index')->with('error','Este Usuário não existe');
        }

        return view('vendas.vendasPorUsuario', compact('usuario'));
    }
    public function index(){

        $vendas =  Venda::All();

        return view("vendas.index",compact("vendas"));
    }
    function telaCadastro()
    {
        $usuarios = Usuario::all();
        return view("vendas.cadastro", compact("usuarios"));
    }
    public function novo(Request $request)
    {

        $valor = $request->input("valor");
        $id_usuario = $request->input("id_usuario");
        $venda = new Venda();
        $venda->valor = $valor;
        $venda->id_usuario = $id_usuario;

        if ($venda->save()) {

            return redirect()->route("vendas.index")->with("success", "Venda adicionada com sucesso!");
        }

        return redirect()->route("vendas.index")->with("error", "Venda não adicionada !");
    }
}

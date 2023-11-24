<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view("usuarios.index", compact("usuarios"));
    }


    public function cadastro()
    {


        return view("usuarios.cadastro");
    }
    public function login()
    {
        return view("usuarios.login");
    }
    public function logar(Request $request)
    {
        $login = $request->input('usuario');
        $senha = $request->input('senha');

        $usuario = Usuario::where('login', "=", $login)->first();


        dd($usuario);

        if (!$usuario) {
        }
    }

    public function editar($id)
    {

        $usuario =  Usuario::where('id', '=', $id)->first();
        return view("usuarios.alteracao", compact('usuario'));
    }

    public function edita(Request $request)
    {

        $usuario = Usuario::find($request->id);


        $usuario->id = $request->id;
        $usuario->nome = $request->nome;
        $usuario->login = $request->login;
        $usuario->senha = password_hash($request->senha, PASSWORD_DEFAULT);
        $usuario->save();
        return redirect()->route('usuarios.index')->with('sucesso', 'Usuário editado com sucesso!');
    }
    public function excluir($id){
        $usuario = Usuario::find($id);
        if($usuario->delete()){

            return redirect()->route('usuarios.index')->with("sucesso","Usuário Excluido com sucesso");
        }

        return redirect()->route('usuarios.index')->with("erro","Usuário Excluido com sucesso");
    }
    public function novo(Request $request)
    {

        $usuario = new Usuario();
        $usuario->nome = $request->nome;
        $usuario->login = $request->login;
        $usuario->senha = password_hash($request->senha, PASSWORD_DEFAULT);
        if ($usuario->save()) {
            $mensagem = "Usuario $usuario->nome Inserido com sucesso";
        } else {
            $mensagem = "Não foi possivel Inserir";
        }
        return view("usuarios.resultado", compact("mensagem"));

    }
}

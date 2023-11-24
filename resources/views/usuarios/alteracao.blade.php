@extends('layouts.app')
@section('alteracao')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Editar {{$usuario->nome}}</h1>

                <form action="{{ route('usuarios.edita') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{$usuario->id}}" name="id">
                    <input type="text" value="{{ $usuario->nome}}" name="nome"class="form-control mb-2" placeholder="Digite o nome">
                    <input type="text" value="{{ $usuario->login}}" name="login"class="form-control mb-2" placeholder="Digite o login">
                    <input type="password" value="" name="senha"class="form-control mb-2" placeholder="Digite a nova senha">
                    <input type="submit" name="enviar" class="btn btn-primary w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>

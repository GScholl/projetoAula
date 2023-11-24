@extends('layouts.app')
@section('cadastro')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Cadastro de Usuário</h1>

                <form action="{{ route('usuarios.novo') }}" method="post">
                    @csrf
                    <input type="text" name="nome"class="form-control mb-2" placeholder="Digite seu nome">
                    <input type="text" name="login"class="form-control mb-2" placeholder="Digite seu login">
                    <input type="password" name="senha"class="form-control mb-2" placeholder="Digite sua senha">
                    <input type="submit" name="enviar" class="btn btn-primary w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>

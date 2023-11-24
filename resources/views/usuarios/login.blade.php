@extends('layouts.app')
@section('login')


    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">


                <div class="card p-4">

                    <form action="{{ route('usuarios.logar') }}" method="post">

                        @csrf

                        <div class="form-group mb-2">
                            <label for="usuario">Usuário</label>
                            <input type="text" class="form-control" placeholder="Digite seu usuário" id="usuario"
                                name="usuario">
                        </div>
                        <div class="form-group mb-4">
                            <label for="senha">Senha: </label>
                            <input type="password"name="senha" class="form-control"
                                id="senha"placeholder="Digite sua senha">
                        </div>
                        <button type="submit" class="btn w-100 btn-success">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@extends('layouts.app')
@section('conteudo')

    <div class="container mt-3">
        <h2 class="text-center">Lista de Usuários</h2>
        <div class="row">
            <div class="col-12">
                @if (session()->has('sucesso'))
                    <div class="alert alert-success">
                        {{ session('sucesso') }}
                    </div>
                @endif
                @if (session()->has('erro'))
                    <div class="alert alert-danger">
                        {{ session('erro') }}
                    </div>
                @endif

                <a role="button" href="{{route('usuarios.cadastro')}}" class="btn btn-success">
                    Adicionar novo Usuario
                </a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Senha</th>
                                <th>Opções</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->nome }}</td>
                                    <td>{{ $usuario->login }}</td>
                                    <td>{{ $usuario->senha }}</td>
                                    <td><a href="{{ route('usuarios.editar', ['id' => $usuario->id]) }}"
                                            role="button"class="btn btn-success">Editar</a></td>
                                    <td><a href="{{ route('usuarios.excluir', ['id' => $usuario->id]) }}"
                                            role="button"class="btn btn-danger">Excluir</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

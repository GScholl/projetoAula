@extends('layouts.app')
@section('vendas.conteudo')

    <div class="container mt-3">
        <h2 class="text-center">Lista de Vendas do Usuário {{$usuario->nome}}</h2>
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

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome do cliente</th>
                                <th>Valor</th>

                                <th>Opções</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuario->vendas as $venda)
                                <tr>
                                    <td>{{ $venda->id }}</td>
                                    <td>{{ $usuario->nome }}</td>
                                    <td>{{ $venda->valor }}</td>


                                    <td><a href="{{ route('vendas.editar', ['id' => $venda->id]) }}"
                                            role="button"class="btn btn-success">Editar</a></td>
                                    <td><a href="{{ route('vendas.excluir', ['id' => $venda->id]) }}"
                                            role="button"class="btn btn-danger">Excluir</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

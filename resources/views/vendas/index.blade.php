@extends('layouts.app')
@section('vendas.conteudo')

    <div class="container mt-3">
        <h2 class="text-center">Lista de Vendas</h2>
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
                <a role="button" href="{{route('vendas.cadastro')}}" class="btn btn-success">
                    Adicionar nova Venda
                </a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome do cliente</th>
                                <th>Valor</th>

                                <th colspan="2">Opções</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendas as $venda)
                                <tr>
                                    <td>{{ $venda->id }}</td>
                                    <td>{{ $venda->usuario->nome }}</td>
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

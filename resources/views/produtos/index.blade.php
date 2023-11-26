@extends('layouts.app')
@section('produtos.conteudo')

    <div class="container mt-3">
        <h2 class="text-center">Lista de produtos</h2>
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
                <a role="button" href="{{route('produtos.cadastro')}}" class="btn btn-success">
                    Adicionar novo Produto
                </a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Quantidade</th>
                                <th>valor</th>
                                <th>Categoria</th>
                                <th>Estado de Origem</th>
                                <th>Opções</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->id }}</td>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->quantidade }}</td>
                                    <td>{{ $produto->valor }}</td>
                                    <td>{{ $produto->categoria }}</td>
                                    <td>{{ $produto->uf_origem }}</td>

                                    <td><a href="{{ route('produtos.editar', ['id' => $produto->id]) }}"
                                            role="button"class="btn btn-success">Editar</a></td>
                                    <td><a href="{{ route('produtos.excluir', ['id' => $produto->id]) }}"
                                            role="button"class="btn btn-danger">Excluir</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

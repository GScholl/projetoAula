@extends('layouts.app')
@section('produtos.alteracao')

    @php
        $estadosBrasileiros = [
            'AC' => 'Acre',
            'AL' => 'Alagoas',
            'AP' => 'Amapá',
            'AM' => 'Amazonas',
            'BA' => 'Bahia',
            'CE' => 'Ceará',
            'DF' => 'Distrito Federal',
            'ES' => 'Espírito Santo',
            'GO' => 'Goiás',
            'MA' => 'Maranhão',
            'MT' => 'Mato Grosso',
            'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais',
            'PA' => 'Pará',
            'PB' => 'Paraíba',
            'PR' => 'Paraná',
            'PE' => 'Pernambuco',
            'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro',
            'RN' => 'Rio Grande do Norte',
            'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia',
            'RR' => 'Roraima',
            'SC' => 'Santa Catarina',
            'SP' => 'São Paulo',
            'SE' => 'Sergipe',
            'TO' => 'Tocantins',
        ];
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-8  mt-3 offset-lg-2">
                <h1>Editar {{ $produto->nome }}</h1>

                <form action="{{ route('produtos.edita') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $produto->id }}" name="id">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" value="{{ $produto->nome }}" name="nome"class="form-control mb-2"
                        placeholder="Digite o nome">
                    <label for="descricao">Descrição do Produto</label>
                    <textarea name="descricao"class="form-control mb-2" placeholder="Digite a descrição">{{ $produto->descricao }} </textarea>
                    <label for="quantidade">Quantidade do Produto</label>
                    <input type="number" value="{{ $produto->quantidade }}" name="quantidade" class="form-control mb-2"
                        placeholder="Digite a Quantidade">
                    <label for="nome">Categoria do Produto</label>
                    <input type="text" name="categoria" value="{{ $produto->categoria }}"class="form-control mb-2"
                        placeholder="Digite a categoria">
                    <label for="valor">Valor do Produto</label>
                    <input type="number" value="{{ $produto->valor }}" name="valor" class="form-control mb-2"
                        placeholder="Digite o valor">
                    <label for="uf_origem">Estado de origem</label>
                    <select name="uf_origem" class="form-select" id="uf_origem">
                        @foreach ($estadosBrasileiros as $indice => $estado)
                            <option {{ $indice == $produto->uf_origem ? 'selected' : '' }} value="{{ $indice }}">
                                {{ $estado }}</option>
                        @endforeach
                    </select>
                    <input type="submit" name="enviar" class="btn mt-3 btn-primary w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>

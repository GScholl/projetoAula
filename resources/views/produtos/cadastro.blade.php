@extends('layouts.app')
@section('produtos.cadastro')
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
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Cadastro de Produto</h1>

                <form action="{{ route('produtos.novo') }}" method="post">
                    @csrf
                    <label for="nome">Nome do Produto</label>
                    <input type="text" name="nome"class="form-control mb-2" placeholder="Digite o nome">
                    <label for="quantidade">Quantidade do Produto</label>
                    <input type="number" name="quantidade" class="form-control mb-2" placeholder="Digite a Quantidade">
                    <label for="descricao">Descrição do Produto</label>
                    <textarea name="descricao"class="form-control mb-2" placeholder="Digite a descrição"></textarea>

                    <label for="nome">Categoria do Produto</label>
                    <input type="text" name="categoria"class="form-control mb-2" placeholder="Digite a categoria">
                    <label for="valor">Valor do Produto</label>
                    <input type="number" value="" name="valor" class="form-control mb-2"
                        placeholder="Digite o valor">
                    <label for="uf_origem">Estado de Origem</label>
                    <select name="uf_origem" class="form-select mb-2" id="uf_origem">
                        @foreach ($estadosBrasileiros as $indice => $estado)
                            <option value="{{ $indice }}">
                                {{ $estado }}</option>
                        @endforeach
                    </select>
                    <input type="submit" name="enviar" class="btn btn-primary mt-2 w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>

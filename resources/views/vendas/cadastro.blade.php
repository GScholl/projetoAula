@extends('layouts.app')
@section('vendas.cadastro')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1> Cadastro de venda</h1>

                <form action="{{ route('vendas.novo') }}" method="post">

                    @csrf

                    <select name="id_usuario" id="" class="form-select mb-4">
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->nome }}</option>
                        @endforeach
                    </select>
                    <input type="number" name="valor" placeholder="Digite o valor" class="form-control mt-2" id="">
                    <button class="btn mt-2 btn-success"> Enviar</button>
                </form>
            @endsection
        </div>
    </div>
</div>

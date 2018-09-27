@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="text-center p-5">
            <h1>CRUD com Laravel 5.2</h1>
        </div>

        <div class="container-fluid p-5">
            <h1>Atualizar produto</h1>
            <form action="{{ url('/produto/update') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="exampleInputEmail1">Id do produto:</label>
                    <input type="text" class="form-control" id="id" name="id" value="{{$produto->id}}" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descrição do produto:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{$produto->descricao}}" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preço do produto:</label>
                    <input type="text" class="form-control" id="preco" name="preco" value="{{$produto->preco}}" required>
                </div>
                <button type="submit" class="btn btn-success">Atualizar produto</button>
                <a><button href="{{ url("/produto") }}" class="btn btn-danger">Cancelar</button></a>
            </form>
        </div>

    </div>
@endsection
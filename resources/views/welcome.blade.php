@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="text-center p-5">
            <h1>CRUD com Laravel 5.2</h1>
        </div>

        <div class="container">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">---</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($produtos as $produto)
                        <tr>
                            <th scope="row">{{$produto->id}}</th>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->preco}}</td>
                            <td>
                                <a href="{{ url("/produto/remove/{$produto->id}") }}"><button class="btn btn-danger">Deletar</button></a>
                                <a href="{{ url("/produto/editar/{$produto->id}") }}"><button class="btn btn-warning">Atualizar</button></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Nenhum produto cadastrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

        <div class="container-fluid p-5">
            <h1>Adicionar produto</h1>
            <form action="{{ url('/produto/save') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="exampleInputEmail1">Nome do produto:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Descrição do produto:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Preço do produto:</label>
                    <input type="text" class="form-control" id="preco" name="preco" required>
                </div>
                <button type="submit" class="btn btn-success">Adicionar produto</button>
            </form>
        </div>

    </div>
@endsection
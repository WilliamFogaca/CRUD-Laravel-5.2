<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Produtos;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produtos::all();

        return view('welcome', ['produtos' => $produtos]);
    }

    public function save(Request $request)
    {

        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;

        //Formatar preço para o banco de dados
        $preco = str_replace(".","",$preco);
        $preco = str_replace(",",".",$preco);

        $produto = Produtos::create([
            'nome' => $nome,
            'descricao' => $descricao,
            'preco' => $preco,
        ]);

        $produto->save();
        return redirect()->route('welcome');
    }

    public function remove(Request $request)
    {
        $id = $request->id;
        Produtos::destroy($id);
        return redirect()->route('welcome');
    }

    public function findOne(Request $request)
    {
        $id = $request->id;
        $produto = Produtos::find($id);
        return view('edit', ['produto' => $produto]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;

        //Formatar preço para o banco de dados
        $preco = str_replace(".","",$preco);
        $preco = str_replace(",",".",$preco);

        $produto = Produtos::find($id);
        $produto -> nome = $nome;
        $produto -> descricao = $descricao;
        $produto -> preco = $preco;

        $produto->save();

        return redirect()->route('welcome');
    }
}

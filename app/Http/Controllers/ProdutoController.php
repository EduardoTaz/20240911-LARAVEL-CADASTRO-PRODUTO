<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function criar(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome; // nome é o que foi definido na migration
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect('/listar_produtos');
    }

    public function listar() {
        $produtos = Produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }
}


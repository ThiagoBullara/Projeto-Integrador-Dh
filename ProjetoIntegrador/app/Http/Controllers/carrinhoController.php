<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compraModel;
use App\experienciaModel;

class carrinhoController extends Controller
{
    public function adicionarCarrinho($produtos){
        
        $produto = experienciaModel::find($produtos);
        
        \Cart::session(auth()->id())->add(array(
            'id' => uniqid(),
            'name' => $produto->nomeExperiencia,
            'price' => $produto->precoExperiencia,
            'quantity' => request('participantes'),
            'attributes' => array(),
            'associatedModel' => $produto
        ));

        return redirect()->route('carrinho.exibir');

    }

    public function exibirCarrinho(){

        $itensCarrinho = \Cart::session(auth()->id())->getContent();

        return view('Carrinho', compact('itensCarrinho'));

    }

    public function deletarCarrinho($itemId){

        \Cart::session(auth()->id())->remove($itemId);

        return back();

    }

    public function editarCarrinho($rowId){

        \Cart::session(auth()->id())->update($rowId,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantidadeCarrinho'),
        )]);
        
        return back();

    }

    public function exibirCarrinhoCheckout(){

        $itensCarrinho = \Cart::session(auth()->id())->getContent();

        return view('PaginaDePagamento', compact('itensCarrinho'));

    }
}

@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Carrinho.css')}}">
@endsection

@section('titulo')
    Buyhood - Carrinho
@endsection

@section('conteudo')

    <div class="px-4 px-lg-0 mt-4">
        <div class="pb-5">
            <div class="container">
                
                <h1 class="mt-5 mb-5">Carrinho</h1>

                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">            
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Experiência</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Preço Total</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantidade de Pessoas</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remover</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Comprar</div>
                                </th>
                                </tr>
                            </thead>
                                <tbody>
                                    @foreach($itensCarrinho as $carrinho)
                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0">{{$carrinho -> name}}</h5>
                                                    </div>
                                                </div>
                                            </th>                                            
                                            <td class="border-0 align-middle" style="text-align:center;"><strong>R${{\Cart::session(auth()->id())->get($carrinho->id)->getPriceSum()}} </strong></td>
                                                <form action="/Checkout">
                                                <input type="hidden" value="{{$carrinho -> name}}" name="name">
                                                <input type="hidden" value="{{$carrinho->associatedModel->id_experiencia}}" name="id_experiencia">
                                                <td class="border-0 align-middle">
                                                    <input type="number" class="inp-buyhood" name="quantidadeCarrinho" min="1" max="10" value="{{$carrinho -> quantity}}">
                                                </td>                                           
                                            <td class="border-0 align-middle"><a href=" {{route('carrinho.removerProduto', $carrinho -> id) }}" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                            <td class="border-0 align-middle"><button type="submit" class="btn-buyhood">Checkout</button></td>
                                            </form>
                                        </tr>
                                        @break
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
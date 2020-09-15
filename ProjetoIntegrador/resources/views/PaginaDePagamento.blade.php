@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDePagamento.css')}}">
@endsection

@section('titulo')
	BuyHood - Pagamento
@endsection

@section('conteudo')
    <div class=" container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card shadow-lg">
                    <div class="row mx-auto justify-content-center text-center">
                        <div class="col-12 mt-3 ">
                            <nav aria-label="breadcrumb" class="second mt-5">
                                <ol class="breadcrumb indigo lighten-6 first ">
                                    <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="/ListaDeExperiencias"><span class="mr-md-3 mr-1">VOLTAR AS COMPRAS</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="/Carrinho"><span class="mr-md-3 mr-1">CARRINHO</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="/Pagamento/"><span class="mr-md-3 mr-1">FINALIZAÇÃO DE COMPRA</span></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body">
                                    <div class="row mt-4">
                                        <div class="col">
                                            <p class="text-muted mb-2">DETALHES DE PAGAMENTO</p>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">NOME NO CARTÃO</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">NÚMERO NO CARTÃO</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                                    <div class="row no-gutters">
                                        <div class="col-sm-6 pr-sm-2">
                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">DATA DE VALIDADE</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">CÓDIGO CVC</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId"> </div>
                                        </div>
                                    </div>
                                    <div class="row mb-md-5">
                                        <form action="/Checkout/">
                                            <div class="col"> <button type="submit" name="" id="" class="btn-buyhood">CONFIRMAR COMPRA</button> </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0 ">
                                <div class="card-header card-2">
                                    <p class="card-text text-muted mt-md-4 mb-2 space">SEU PEDIDO <a class="black-text text-uppercase active-2" href="/Carrinho/"><span class=" small text-muted ml-2">EDITAR CARRINHO</span></a></p>
                                    <hr class="my-2">
                                </div>
                                <div class="card-body pt-0">
                                    @foreach($itensCarrinho as $carrinho)
                                        <div class="row justify-content-between">
                                            <div class="col-auto col-md-7">
                                                <div class="media flex-column flex-sm-row"> 
                                                    <div class="media-body my-auto">
                                                        <div class="row ">
                                                            <div class="col">
                                                                <p class="mb-0"><b>{{$carrinho -> name}}</b></p><small class="text-muted">Preço por pessoa: R${{$carrinho -> price}}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pl-0 flex-sm-col col-auto my-auto">
                                                <p class="boxed-1">{{$carrinho -> quantity}} Pessoas</p>
                                            </div>
                                            <div class="pl-0 flex-sm-col col-auto my-auto">
                                                <p><b>R${{\Cart::session(auth()->id())->get($carrinho->id)->getPriceSum()}}</b></p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <hr class="my-2">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <p><b>Total</b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1"><b>R${{\Cart::session(auth()->id())->getTotal()}}</b></p>
                                                </div>
                                            </div>
                                            <hr class="my-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDePagamento.css')}}">
@endsection

@section('titulo')
	BuyHood - Pagamento
@endsection

@section('conteudo')
    <div class=" container-fluid my-5 ">
        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card shadow-lg ">
                    <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                        <div class="col">
                            <p class="text-muted space mb-0 shop"> No.de Compra 78618K</p>
                            <p class="text-muted space mb-0 shop"></p>
                        </div>
                        <div class="col">
                            <div class="row justify-content-start ">
                                <!-- LOGO DA BUYHOOD <div class="col"> <img class="irc_mi img-fluid cursor-pointer " src="" width="70" height="70"> </div> -->
                            </div>
                        </div>    
                    </div>
                    
                    <div class="row mx-auto justify-content-center text-center">
                        <div class="col-12 mt-3 ">
                            <nav aria-label="breadcrumb" class="second ">
                                <ol class="breadcrumb indigo lighten-6 first ">
                                    <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-1">VOLTAR AS COMPRAS</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-1">CARRINHO</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">FINALIZAÇÃO DE COMPRA</span></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <p class="card-text text-muted mt-4 space">DETALHES DE ENVIO</p>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-0">
                                            <p><b>Bootstrap Rua Helena, 171 - Vila Olimpia</b></p>
                                        </div>
                                        <div class="col-auto">
                                            <p><b>Bootstrap@outlook.com</b> </p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <p class="text-muted mb-2">DETALHES DE PAGAMENTO</p>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">NOME NO CARTÃO</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="Victor e Leo"> </div>
                                    <div class="form-group"> <label for="NAME" class="small text-muted mb-1">NÚMERO NO CARTÃO</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="4534 5555 5555 5555"> </div>
                                    <div class="row no-gutters">
                                        <div class="col-sm-6 pr-sm-2">
                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">DATA DE VALIDADE</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="06/21"> </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group"> <label for="NAME" class="small text-muted mb-1">CÓDIGO CVC</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="183"> </div>
                                        </div>
                                    </div>
                                    <div class="row mb-md-5">
                                        <div class="col"> <button type="button" name="" id="" class="btn btn-lg btn-block ">CONFIRMAR COMPRA</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0 ">
                                <div class="card-header card-2">
                                    <p class="card-text text-muted mt-md-4 mb-2 space">SEU PEDIDO <span class=" small text-muted ml-2 cursor-pointer">EDITAR CARRINHO</span> </p>
                                    <hr class="my-2">
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row justify-content-between">
                                        <div class="col-auto col-md-7">
                                            <div class="media flex-column flex-sm-row"> <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                                <div class="media-body my-auto">
                                                    <div class="row ">
                                                        <div class="col-auto">
                                                            <p class="mb-0"><b>Produto Variado</b></p><small class="text-muted">1 Semana</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" pl-0 flex-sm-col col-auto my-auto">
                                            <p class="boxed-1">QT.</p>
                                        </div>
                                        <div class=" pl-0 flex-sm-col col-auto my-auto ">
                                            <p><b>$$PREÇO</b></p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row justify-content-between">
                                        <div class="col-auto col-md-7">
                                            <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                                                <div class="media-body my-auto">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <p class="mb-0"><b>Produto Variado</b></p><small class="text-muted">2 semanas</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-0 flex-sm-col col-auto my-auto">
                                            <p class="boxed">QT.</p>
                                        </div>
                                        <div class="pl-0 flex-sm-col col-auto my-auto">
                                            <p><b>$$PREÇO</b></p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row justify-content-between">
                                        <div class="col-auto col-md-7">
                                            <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                                <div class="media-body my-auto">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <p class="mb-0"><b>Produto Variado</b></p><small class="text-muted">2 semanas</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-0 flex-sm-col col-auto my-auto">
                                            <p class="boxed-1">QT.</p>
                                        </div>
                                        <div class="pl-0 flex-sm-col col-auto my-auto">
                                            <p><b>$$PREÇO</b></p>
                                        </div>
                                    </div>
                                    <hr class="my-2">
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <p class="mb-1"><b>Total</b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1"><b>$$PREÇO</b></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col">
                                                    <p class="mb-1"><b>Entrega</b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1"><b>$$PREÇO</b></p>
                                                </div>
                                            </div>
                                            <div class="row justify-content-between">
                                                <div class="col-4">
                                                    <p><b>Total</b></p>
                                                </div>
                                                <div class="flex-sm-col col-auto">
                                                    <p class="mb-1"><b>$$PREÇO TOTAL</b></p>
                                                </div>
                                            </div>
                                            <hr class="my-0">
                                        </div>
                                    </div>
                                    <div class="row mb-5 mt-4 ">
                                        <div class="col-md-7 col-lg-6 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CARD</button></div>
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

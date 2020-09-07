@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Carrinho.css')}}">
@endsection


@section('titulo')
    Carrinho
@endsection

@section('conteudo')
    <div class="px-4 px-lg-0 cima">
        <div class="pb-5">
            <div class="container">
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
                                <div class="py-2 text-uppercase">Preço</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantidade</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Remover</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img src="" alt="" width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Thiago faz brownie no Fasano</a></h5>
                                </div>
                                </div>
                            </th>
                                <td class="border-0 align-middle"><strong>R$200</strong></td>
                                <td class="border-0 align-middle"><strong>3</strong></td>
                                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr>
                            <th scope="row" class="border-0">
                                <div class="p-2">
                                    <img src="" alt="" width="70" class="img-fluid rounded shadow-sm">
                                <div class="ml-3 d-inline-block align-middle">
                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Thiago faz brownie no Fasano</a></h5>
                                </div>
                                </div>
                            </th>
                                <td class="border-0 align-middle"><strong>R$200</strong></td>
                                <td class="border-0 align-middle"><strong>3</strong></td>
                                <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>

                    </div>
                </div>

                <div class="row py-5 p-4 bg-white rounded shadow-sm">
                    <div class="col-lg-12">
                        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Total</div>
                        <div class="p-4">
                        <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">R$400.00</h5>
                        </li>
                        </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Checkout</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
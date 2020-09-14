@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Home.css')}}">
@endsection

@section('titulo')
    Home
@endsection

@section('conteudo')

    <div class="container mb-5 mt-5" style="text-align:center;">
        <div class="row mb-5 mt-5">
            <div class="col-lg-12 mb-5 mt-5">
                <h1>✅</h1>
                <h1>Compra realizada com Sucesso!</h1>
                <p>Você receberá um código no seu e-mail cadastrado, leve esse código ao restaurante que você escolheu (durante os horários válidos de funcionamento da experiência), e eles estarão prontos para receber você! Obrigado por utilizar a nossa plataforma, agradeçemos a sua preferência!</p>
            </div>
        </div>
    </div>

@endsection
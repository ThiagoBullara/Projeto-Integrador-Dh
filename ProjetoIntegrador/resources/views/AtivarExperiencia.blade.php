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
                <h1>Ativar experiência</h1>
                <p>Mostre esse QR Code para a recepcionista e sua compra será processada!</p>
                <a href="/ExperienciaAtivada/"><img width="100%"src="{{'\storage\img\qrcode.png'}}" alt="qrcode.png"></a>
            </div>
        </div>
    </div>

@endsection
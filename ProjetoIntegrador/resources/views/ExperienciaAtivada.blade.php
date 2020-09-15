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
                <h1>Compra resgatada com Sucesso!</h1>
                <h5>
                @foreach( $minhasCompras as $teste2)
                    <p>A experiência "{{ $teste2 -> name }}" para um total de {{ $teste2 -> quantidade_pessoas }} pessoas foi ativada com sucesso</p>
                    @break
                @endforeach
                </h5>
                <p>Obrigado por utilizar a nossa plataforma, agradeçemos a sua preferência!</p>
            </div>
        </div>
    </div>

@endsection
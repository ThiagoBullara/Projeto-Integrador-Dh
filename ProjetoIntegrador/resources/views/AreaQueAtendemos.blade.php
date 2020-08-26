@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/AreaQueAtendemos.css')}}">
@endsection

@section('titulo')
	BuyHood - Area de atendimento
@endsection

@section('conteudo')
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="iframe-wrap col-lg-12">
                <iframe class="responsive-iframe" src="https://www.google.com/maps/d/embed?mid=1bR-u0RxdThunkn-_P-Y29h_ru83XtfKC" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
@endsection

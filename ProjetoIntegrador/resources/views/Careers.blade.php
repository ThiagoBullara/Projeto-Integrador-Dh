@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Careers.css')}}">
@endsection

@section('titulo')
	BuyHood - Carreiras
@endsection

@section('conteudo')
    <div class="container">
        <section>
            <div class="banner">
                <div class="banner-title">
                <h1>Trabalhe na Buyhood!</h1>
                </div>
                <div class="banner-description">
                    <p>Nós somos uma empresa de pequeno porte que atua na área de Moema e Vila Nova Conceição, com o escritório em boa localização, e oferecemos salário competitivo, chance de crescimento na carreira, ambiente amigável e café grátis! Junte-se a uma equipe amorosa e cheia de confusão!</p>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <div class="careers-available">
                <div class="careers-icon">
                    <span>:(</span>
                </div>
                <div class="careers-description">
                    <span>Oh não! Infelizmente não temos vagas abertas no momento! Até um outro dia..</span>
                </div>
            </div>
        </section>
    </div>
@endsection

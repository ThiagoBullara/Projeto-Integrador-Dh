@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Home.css')}}">
@endsection

@section('titulo')
    Home
@endsection

@section('conteudo')
    <section class="container-fluid banner">
        <ul>
            <li class="sobre">
                <h1>Conheça o Buyhood</h1>
                <p>
                    O Buyhood é uma plataforma onde você descobre e desfruta de experiências 
                    gastronômicas de uma maneira única. Trabalhamos em uma pequena área entre o Morumbi, 
                    Campo Belo, Pinheiros e Paraíso, confira toda nossa área de atendimento 
                    <a href="/Area-de-Atendimento">aqui!</a>
                </p>
            </li>
        </ul>
    </section>

    <section class="container-fluid">
        <div class="row titulo">
            <h2 class="how-to-main-title col-lg-12">Como usar o Buyhood</h2>
        </div>
        <div class="info row">
            <div class="col-lg-3">
                <img class="how-to-icons" src="https://i.ibb.co/VS3nw3y/icone-Perfil.png" alt="Ícone de perfil">
                <p class="how-to-title">Cadastre-se!</p>
                <p class="how-to-description">Crie uma conta para poder desfrutar da melhor gastronomia da região.</p>
            </div>
            <div class="col-lg-3">
                <img class="how-to-icons" src="https://i.ibb.co/WG76WFK/icone-Pesquisa.png" alt="Ícone de pesquisar">
                <p class="how-to-title">Explore as nossas opções</p>
                <p class="how-to-description">Descubra todas as culinárias e experiências que estão bem debaixo do seu nariz!</p>
            </div>
            <div class="col-lg-3">
                <img class="how-to-icons" src="https://i.ibb.co/MZf1XML/icone-Carrinho.png" alt="Ícone de carrinho">
                <p class="how-to-title">Adicione tudo no seu carrinho</p>
                <p class="how-to-description">São milhares de pratos e experiências que você só encontra aqui!</p>
            </div>
            <div class="col-lg-3">
                <img class="how-to-icons" src="https://i.ibb.co/P96rpp0/icone-Beneficios.png" alt="Ícone de benefícios">
                <p class="how-to-title">Aproveite os benefícios</p>
                <p class="how-to-description">
                    O Buyhood está aqui para ajudar você a explorar os sabores do seu bairro e 
                    descobrir novos lugares para comer por um ótimo preço.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="/ListaDeExperiencias"><button class="how-to-button">Explore</button></a>
            </div>
        </div>
    </section>

    <section class="container-fluid carrosel">
    <div class="slider">

    <div class="slider-experiencias">
                
        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">
        
        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">

        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">
        
        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">
        
        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">
        
        <img  class="slide" src="http://via.placeholder.com/400x400" alt="Joao-Doria">

    </div>
    <!-- 
    <div id="arrow-prev" class="arrow"></div>            
    <div id="arrow-next" class="arrow"></div> -->

    </div>
    </section>

    <section class="container-fluid descubra-todos">
        <div class="row descubra">
            <div class="col-lg-12">
                <h2>Descubra!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="text-align: -webkit-center;">
                <div class="polaroid">
                    <a href="/Experiencia/4">
                        <img src="storage/img/fotoExperiencia4-1.jpg" alt="Melhor Experiência" style="width:100%" height="450">
                        <div class="container">
                            <p>Conheça nossa experiência mais comprada!</p>
                        </div>
                    </a>
                </div>
            </div>            
            <div class="col-lg-6" style="text-align: -webkit-center;">
                <div class="polaroid">
                    <a href="/Experiencia/2">
                        <img src="storage/img/fotoExperiencia2-1.jpg" alt="Melhor Experiência" style="width:100%" height="450">
                        <div class="container">
                            <p>Conheça nossa experiência mais bem avaliada!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
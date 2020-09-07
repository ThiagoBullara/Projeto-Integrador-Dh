@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/ListaDeExperiencias.css')}}">
@endsection

@section('titulo')
    BuyHood - Experiências 
@endsection

@section('conteudo')
    <main>
        <!-- <div>
            <div class="banner">
                <img class ="banner-image" src="http://via.placeholder.com/1350x550" alt="">
            </div>
        </div>  -->
        <div class="container-fliud divisao">
            <div class="row">
                <div class="col">
                    <h2>Nossas Experiências</h2>
                    <div class="buscar mt-4">
                        <input type="search" class="inp" placeholder="Procure por uma experiência!">
                        <input type="submit" value="Buscar" class="btn-inp">
                    </div>
                </div>
            </div>
        </div>
        <div class="container produtos">
            <div class="row">
            @forelse($experiencia as $experiencias)
                <div class="col-lg-4 col-md-6">
                    <a href="/Experiencia/{{ $experiencias->id_experiencia }}" class="link-restaurante">
                        <div class="card-produtos">
                            <div >
                                <img style="width:100%; height:350px;" src="{{'storage/img/'.$experiencias->fotoExperiencia1}}" alt="{{$experiencias->fotoExperiencia1}}" class="imagem-mobile">
                            </div>
                            <div class="titulo-restaurante">
                                <p>{{ $experiencias->nomeExperiencia }}</p>
                                <p class="nome-restaurante">R$: {{ $experiencias->precoExperiencia }}</p>
                                 <!--Futuramente Será substituido pelo nome do restaurante !-->
                            </div>
                        </div>
                    </a>
                </div>
                @empty

                <div class="col-lg-12" style="text-align:center;">
                    <h1>Não existem experiencias cadastradas</h1>
                </div>

            @endforelse
            </div>
            <div class="button-search">
                {{ $experiencia->links() }}
            </div>
        </div>
    </main>
@endsection
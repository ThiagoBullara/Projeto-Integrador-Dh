@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/ListaDeExperiencias.css')}}">
@endsection

@section('titulo')
    BuyHood - Experiências 
@endsection

@section('conteudo')
    <main>
        <div class="container-fluid background-tag">
            <h1 class="titulo-tag  pt-4">Tipos de comida</h1>
            <form action="/ListaDeExperienciasBuscarTag" method="GET">
                <div class="row row-tags pt-4">
                    <div class="col-lg-">
                        <button type="submit" value="Culinária Mexicana" class="tag" name="tipo">Mexicana</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Vegetariana" class="tag" name="tipo">Vegetariana</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Culinária Árabe" class="tag" name="tipo">Árabe</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Culinária Francesa" class="tag" name="tipo">Francesa</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Frutos do mar" class="tag" name="tipo">Frutos do mar</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Massas e Pratos Quentes" class="tag" name="tipo">Massas</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Culinária Japonêsa" class="tag" name="tipo">Japonêsa</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Nacional" class="tag" name="tipo">Nacional</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Frangos e Aves" class="tag" name="tipo">Aves</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Confeitaria" class="tag" name="tipo">Confeitaria</button>
                    </div>
                </div>
                <div class="row row-tags pt-4">
                    <div class="col-lg-">
                        <button type="submit" value="Doces e Sobremesas" class="tag-2" name="tipo">Doces</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Artesanal" class="tag-2" name="tipo">Artesanal</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Gastrônomia Exótica" class="tag-2" name="tipo">Exóticas</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Culinária Chinesa" class="tag-2" name="tipo">Chinesa</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Comida saudável e Fitness" class="tag-2" name="tipo">Fitness</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Curso com certificação" class="tag-2" name="tipo">Curso com certificação</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Bebidas Alcoólicas" class="tag-2" name="tipo">Bebidas Alcoólicas</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Padaria e Assados" class="tag-2" name="tipo">Padaria</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Gastronômia Renomada" class="tag-2" name="tipo">Renomada</button>
                    </div>
                    <div class="col-lg-">
                        <button type="submit" value="Gastronômia Gourmet" class="tag-2" name="tipo">Gourmet</button>
                    </div>
                </div>
                
            </form>
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
                                <p class="nome-restaurante">R$: {{ $experiencias->nomeRestaurante }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @empty

                <div class="col-lg-12" style="text-align:center;">
                    <h1 class="mt-5 pt-5">Não existem experiências com esse tipo</h1>
                </div>

            @endforelse
            </div>
            <div class="button-search">
            </div>
        </div>
    </main>
@endsection
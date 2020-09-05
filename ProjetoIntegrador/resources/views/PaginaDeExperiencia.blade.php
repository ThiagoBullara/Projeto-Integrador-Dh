@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDeExperiencia.css')}}">
@endsection

@section('titulo')
    BuyHood - Experiência
@endsection

@section('conteudo')
    <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="product-title">{{ $detalhesExperiencia->nomeExperiencia }}</h1>
                    <br>
                    <br>
                </div>
                <div class="col-lg-6" style="text-align:right;">
                    <a href="/DeletarExperiencia/{{$detalhesExperiencia->id_experiencia}}"><button class="btn btn-danger">Deletar Experiencia</button></a>
                    <a href="/EditarExperiencia/{{$detalhesExperiencia->id_experiencia}}"><button class="btn btn-primary">Editar Experiencia</button></a>
                </div>
            </div>
            
            <div class="info-header row">
                <div class="col-lg-10">
                    <div class="info">
                        <p>{{ $detalhesExperiencia->descricaoExperiencia }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-6 slideshow">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img width="540px" height="347px" class="d-block w-100" src="{{ '/storage/img/'.$detalhesExperiencia->fotoExperiencia1 }}" alt="{{ $detalhesExperiencia->fotoExperiencia1 }}">
                            </div>
                            <div class="carousel-item">
                                <img width="540px" height="347px" class="d-block w-100" src="{{ '/storage/img/'.$detalhesExperiencia->fotoExperiencia2 }}" alt="{{ $detalhesExperiencia->fotoExperiencia2 }}">
                            </div>
                            <div class="carousel-item">
                                <img width="540px" height="347px" class="d-block w-100" src="{{ '/storage/img/'.$detalhesExperiencia->fotoExperiencia3 }}" alt="{{ $detalhesExperiencia->fotoExperiencia3 }}">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Foto Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próxima Foto</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 product">
                    <ul class="description-list">
                        <li class="description-itens-title"><h2>Detalhes desta experiência</h2></li>
                        <li class="description-itens">{{$detalhesExperiencia -> tag1}}</li>
                        <li class="description-itens">{{$detalhesExperiencia -> tag2}}</li>
                        <li class="description-itens">{{$detalhesExperiencia -> tag3}}</li>
                        <li class="description-itens">{{$detalhesExperiencia -> tag4}}</li>
                        <li class="description-itens" style="font-weight:bolder;">Preço por pessoa: R${{ $detalhesExperiencia->precoExperiencia }}</li>
                    </ul>
                    <div class="form-group">
                        <label for="participants"><h4>Total de participantes</h4></label>
                        <select name="participantes" class="form-control participants" id="participants">
                            <option default selected disabled>Selecione</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>
                    <div class="pricing">
                        <a href="/Pagamento" class="btn-buyhood">Comprar</a>
                    </div>
                </div>       
            </div>
        </div>
        <div class="container">
            <div class="row about">
                <div class="col-lg-3">
                    <h2>Sobre a sua experiência</h2>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    {{ $detalhesExperiencia->sobreExperiencia }}
                </div>
            </div>
            <div class="row host">
                <div class="col-lg-3">
                    <h2>Sobre o restaurante</h2>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <img src="{{ '/storage/img/'.$detalhesExperiencia->logoRestaurante }}" alt="Avatar" class="avatar">
                    <section>
                        <p>{{ $detalhesExperiencia->sobreRestaurante }}</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

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
                @if (Auth::user() != null && Auth::user()->email == "buyhoodlocalfoods@gmail.com")
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 mb-5 mt-5" style="text-align:right;">
                        <a href="/DeletarExperiencia/{{$data['detalhesExperiencia']->id_experiencia}}"><button class="btn btn-danger" onclick="confirmacao()">Deletar Experiencia</button></a>
                            <script>
                                function confirmacao() {

                                    var boolConfirmacao =  confirm("Você tem certeza que quer deletar permanentemente essa experiência?");

                                    if (!boolConfirmacao){
                                        event.preventDefault();
                                    }
                                }
                            </script>
                        <a href="/EditarExperiencia/{{$data['detalhesExperiencia']->id_experiencia}}"><button class="btn btn-primary">Editar Experiencia</button></a>
                    </div>
                @endif
                <div class="col-lg-12">
                    <h1 class="product-title mb-4">{{ $data['detalhesExperiencia']->nomeExperiencia }}</h1>
                </div>
            </div>
            
            <div class="info-header row">
                <div class="col-lg-10">
                    <div class="info">
                        <h3>{{ $data['detalhesExperiencia']->descricaoExperiencia }}</h3>
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
                                <img width="540px" height="447px" class="d-block w-100" src="{{ '/storage/img/'.$data['detalhesExperiencia']->fotoExperiencia1 }}" alt="{{ $data['detalhesExperiencia']->fotoExperiencia1 }}">
                            </div>
                            <div class="carousel-item">
                                <img width="540px" height=447px" class="d-block w-100" src="{{ '/storage/img/'.$data['detalhesExperiencia']->fotoExperiencia2 }}" alt="{{ $data['detalhesExperiencia']->fotoExperiencia2 }}">
                            </div>
                            <div class="carousel-item">
                                <img width="540px" height="447px" class="d-block w-100" src="{{ '/storage/img/'.$data['detalhesExperiencia']->fotoExperiencia3 }}" alt="{{ $data['detalhesExperiencia']->fotoExperiencia3 }}">
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
                        <li class="description-itens">{{ $data['detalhesExperiencia'] -> tag1 }}</li>
                        <li class="description-itens">{{ $data['detalhesExperiencia'] -> tag2 }}</li>
                        <li class="description-itens">{{ $data['detalhesExperiencia'] -> tag3 }}</li>
                        <li class="description-itens">{{ $data['detalhesExperiencia'] -> tag4 }}</li>
                        <li class="description-itens mt-3 mb-3">Horário disponível para essa experiência: <strong>{{ $data['detalhesExperiencia'] -> funcionamento }}</strong></li>
                        <li class="description-itens mb-3">
                            Endereço: <a href="http://maps.google.com/?q={{ $data['detalhesExperiencia'] -> endereco }}" target="_blank"><strong>{{ $data['detalhesExperiencia'] -> endereco }}</strong>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="description-itens mt-4 mb-5" style="font-weight:bolder;">Preço por pessoa: <h3 class="mt-3" style="color:green;font-weight:800">R${{ $data['detalhesExperiencia']->precoExperiencia }}</h3></li>
                    </ul>
                    <form action="{{ route('carrinho.adicionar',$data['detalhesExperiencia'] -> id_experiencia) }}">
                        <div class="form-group">
                            <label for="participants"><h3>Total de participantes</h3></label>
                            <select name="participantes" class="form-control" id="participantes" required>
                                @for($i=1; $i <= $data['detalhesExperiencia']['quantidadePessoasExperiencia'] ; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="pricing">
                            <button class="btn-buyhood" type="submit">Comprar</button>
                        </div>
                    </form>
                </div>       
            </div>
        </div>
        <div class="container">
            <div class="row about">
            <div class="col-lg-4" style="text-align: start;">
                    <h2>Sobre a sua experiência</h2>
                </div>
                <div class="col-lg-8">
                    {{ $data['detalhesExperiencia']->sobreExperiencia }}
                </div>
                <iframe class="mt-5 mb-5" width="1200" height="600" src="{{ $data['detalhesExperiencia']->video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="row host">
                <div class="col-lg-4" style="text-align: start;">
                    <h2>Sobre o restaurante</h2>
                </div>
                <div class="col-lg-8">
                    <img src="{{ '/storage/img/'.$data['detalhesExperiencia']->logoRestaurante }}" alt="Avatar" class="avatar">
                    <section>
                        <p>{{ $data['detalhesExperiencia']->sobreRestaurante }}</p>
                    </section>
                </div>
            </div>
        </div>

        
        <div class="about container mt-5">
            <h3>Opinião de quem comprou</h3>
                @forelse($data['feedback'] as $feedback)
                    <hr> 
                    <div class="row mb-5" style="justify-content: center;">            
                        <div class="col-lg-2">
                            <img class="comentarios-img" src="{{ '/storage/img/'.$feedback->foto_usuario }}" width="100" height="100" alt="#">
                        </div>
                        <div class="col-lg-8">
                            <h5>{{ $feedback->nome_usuario }} <span class="timestamp"> {{ date( 'd/m/Y', strtotime($feedback->created_at)) }}</span></h5>
                            <p>
                                @for($i=0;$i<$feedback['rating'];$i++)
                                    <i class="estrelas fas fa-star"></i>
                                @endfor
                            </p>
                            <p class="box-de-comentario">"{{ $feedback->feedback }}"</p>
                        </div>
                    </div>                   
                @empty
                    <div class="row mb-5" style="justify-content: center;">            
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <p>Ainda não existem avaliações sobre essa experiência</p>
                        </div>
                    </div>
                @endforelse
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-6">
                        {{$data['feedback']->links()}}
                    </div>
                </div>
        </div>

        <!-- Aqui começa o front de comentarios -->


        <h3>Perguntas e Comentarios</h3>
        <div class="container mt-5" style="border: none;">
            @forelse($data['comentarios'] as $comentario)
            <hr> 
                <div class="row mb-5" style="justify-content: center;">            
                    <div class="col-lg-2">
                        <img class="comentarios-img" src="{{ '/storage/img/'.$comentario->fotoPerfil }}" width="100" height="100" alt="#">
                    </div>
                    <div class="col-lg-8">
                        <h5>{{ $comentario->nome_usuario }} <span class="timestamp"> {{ date( 'd/m/Y', strtotime($comentario->created_at)) }}</span></h5>
                        <p class="box-de-comentario">"{{ $comentario->comentario }}"</p>
                    </div>
                </div>
                
            @empty
                <div class="row mb-5" style="justify-content: center;">            
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <p>Ainda não existem comentários sobre essa experiência</p>
                    </div>
                </div>
        @endforelse
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-6">
                {{$data['comentarios']->links()}}
            </div>
        </div>
        @auth
            <div class="row">
                <div class="col-lg-12">
                    <form action="/EnviarComentario/{id_experiencia}" method="POST">
                        @csrf
                        <input type="hidden" name="id_experiencia" value="{{ $data['detalhesExperiencia']->id_experiencia }}">
                        <input type="hidden" name="nome_usuario" value="{{ $data['detalhesExperiencia']->id_experiencia }}">
                        <textarea class="comentarios-form" name="comentario" id="comentario" cols="150" rows="5"></textarea>
                        <button type="submit">Comentar</button>
                    </form>
                </div>
            </div>
        @endauth
        
        </div>
        <!-- Aqui termina o front de comentarios -->
    </div>
@endsection

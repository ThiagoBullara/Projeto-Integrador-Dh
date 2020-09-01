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
                    <h1 class="product-title">{{ $detalhesExperiencia->nome }}</h1>
                    <br>
                    <br>
                </div>
                <div class="col-lg-6" style="text-align:right;">
                    <a href="/DeletarExperiencia/{{$detalhesExperiencia->id_experiencia}}"><button class="btn btn-danger">Deletar Experiencia</button></a>
                    <a href="/EditarExperiencia/{{$detalhesExperiencia->id_experiencia}}"><button class="btn btn-primary">Editar Experiencia</button></a>
                </div>
            </div>
            
            <div class="info-header row">
                <div class="col-lg-6">
                    <div class="tags">
                        <ul class="tags-list">
                            <a href="#"><li class="tags-itens">Comida</li></a>
                            <a href="#"><li class="tags-itens">Aprendizado</li></a>
                            <a href="#"><li class="tags-itens">Família</li></a>
                            <a href="#"><li class="tags-itens">Doces</li></a>
                            <a href="#"><li class="tags-itens">Caseiro</li></a>
                            <a href="#"><li class="tags-itens">Online</li></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <ul class="info-list">
                            <li class="info-itens">Aula 100% online</li>
                            <li class="info-itens">- Grupos de até 10 pessoas -</li>
                            <li class="info-itens">Duração de 3 horas</li>
                            <li class="info-itens"><div class="row">
                                <div class="col-lg-12">
                                        <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg class="bi bi-star-half" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                                        </svg>
                                    </span></span></h1>
                                </div>
                            </div></li>
                        </ul>
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
                                <img class="d-block w-100" src="{{ '/storage/img/'.$detalhesExperiencia->foto }}" alt="{{ $detalhesExperiencia->foto }}">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://via.placeholder.com/540x337" alt="Segunda Foto">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://via.placeholder.com/540x337" alt="Terceira Foto">
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
                        <li class="description-itens-title"><h2>Como será sua experiência</h2></li>
                        <li class="description-itens">Opções Vegetarianas</li>
                        <li class="description-itens">Perfeito para comer com amigos</li>
                        <li class="description-itens">Ingredientes 100% naturais</li>
                        <li class="description-itens">Fácil de fazer</li>
                        <li class="description-itens">Aprovado pelo chefe</li>
                        <li class="description-itens" style="font-weight:bolder;">Preço por pessoa: R${{ $detalhesExperiencia->preco }}</li>
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
                        <div class="calendar">
                            <label for="data"><h4>Reserve uma data</h4></label><br>
                            <input type="date" name="data" id="data" value="26-08-2020" min="26-08-2020" max="26-08-2021">
                        </div>
                            <div class="calendar">
                        </div>
                    </div>
                    <div class="pricing">
                        <a href="/Pagamento" class="btn-buyhood">Comprar</a>
                    </div>
                </div>       
            </div>
        </div>
        <div class="container">
            <div class="row about">
                <div class="col-lg-2">
                    <h2>Sobre</h2>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    {{ $detalhesExperiencia->descricao }}
                </div>
            </div>
            <div class="row host">
                <div class="col-lg-2">
                    <h2>Seu anfitrião</h2>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <img src="http://via.placeholder.com/100x100" alt="Avatar" class="avatar">
                    <section>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius mollitia sit ipsam repudiandae alias labore rerum possimus dolore inventore et. Animi numquam nulla explicabo odit omnis nobis debitis fugiat placeat.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius mollitia sit ipsam repudiandae alias labore rerum possimus dolore inventore et. Animi numquam nulla explicabo odit omnis nobis debitis fugiat placeat.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius mollitia sit ipsam repudiandae alias labore rerum possimus dolore inventore et. Animi numquam nulla explicabo odit omnis nobis debitis fugiat placeat.</p>
                    </section>
                </div>
            </div>
        </div>
        <div class="container container-last">
            <div>
                <h1 class="review-section-title">Opinião de quem comprou</h1>
            </div>
            <div class="review-section">
                <img src="https://www.w3schools.com/w3images/bandmember.jpg" alt="Avatar" style="width:90px">
                <p><span>João de Andrade</span><span class="rating">
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </span></span></p>
                <q>A comida é excelente, o atendimento impecável, e a experiência de poder observar as lindas criaturas aquáticas brasileiras enquanto degusta um belo prato
                    de foie gras é inegualável! Recomendo a todos!</q>
            </div>
            
            <div class="review-section">
                <img src="https://www.w3schools.com/w3images/avatar_g2.jpg" alt="Avatar" style="width:90px">
                <p><span >Rebecca Sofia</span><span class="rating">
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </span></span></p>
                <q>Sem dúvidas um ambiente para a classe alta de São Paulo, me senti nas Maldívas por um segundo, comida da chef Paula Mbido superou expetativas, recomendo!</q>
            </div>
            <div class="review-section">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTuhOjBJDlXKQlu0ymxVcG1hGxLGDqbVpyDvxbSLjput9Z_YtbQ&usqp=CAU" alt="Avatar" style="width:90px">
                <p><span>Ricardo Milos</span><span class="rating">
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-fill" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <svg class="bi bi-star-half" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                    </svg>
                    <svg class="bi bi-star" width="0.5em" height="0.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </span></span></p>
                <q>Achei mais ou menos, a comida era boa mas um peixe ficou me encarando por 30 minutos, me senti desconfortável</q>
            </div>
            <div>
                <button type="button" class="btn-buyhood">Mais avaliações</button>
            </div>
        </div>
    </div>
@endsection

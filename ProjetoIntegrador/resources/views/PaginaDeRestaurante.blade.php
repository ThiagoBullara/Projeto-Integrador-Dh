@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDeRestaurante.css')}}">
@endsection

@section('titulo')
    BuyHood - {{$restaurante -> nomeRestaurante}}
@endsection

                    


@section('conteudo')

<img src="{{'/storage/img/'.$restaurante -> fotoBanner}}">

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 banner"> 
                    <h1 class="titulo-loja">{{$restaurante -> nomeRestaurante}}</h1>
                </div>
            </div>
        </div>
    </section>
    <main>
        <div class="container">
            <div class="row conteudo">
                <div class="col-md-8 conteudo-sobre">
                    <h1>Sobre</h1>
                    <p>{{$restaurante -> descricao}}</p>
                    <cite>{{$restaurante -> nomeProprietario}}</cite>
            
                </div>
                <!-- <div class="info col-md-4">
                    <h3>Info</h3>
                    <ul class="preco">
                        <h5>Nossos preços</h5>
                        <li>Homem - R$ 110,00</li>
                        <li>Mulher - R$ 90,00</li>
                        <li>Criança - R$ 50,00</li>
                    </ul>
                    <h3>Funcionamento</h3>
                    <table class="horario">
                        <thead>
                            <tr>
                                <td>Dia</td>
                                <td>Horário</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Terça</td>
                                <td>19:00-23:00</td>
                            </tr>
                            <tr>
                                <td>Quarta</td>
                                <td>19:00-23:00</td>
                            </tr>
                            <tr>
                                <td>Quinta</td>
                                <td>19:00-23:00</td>
                            </tr>
                            <tr>
                                <td>Sexta</td>
                                <td>19:00-01:00</td>
                            </tr>
                            <tr>
                                <td>Sábado</td>
                                <td>19:00-01:00</td>
                            </tr>
                            <tr>
                                <td>Domingo</td>
                                <td>19:00-23:00</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>
    </main>
    <section class="cardapio">
        <div class="container">
            <div class="row sobre-cardapio">
                <div class="col-lg-12">
                    <h3>Cardápio</h3>
                </div>
            </div>
            <p class="descricaoCardapio">{{$restaurante -> descricaoCardapio}}</p>
            <div class="row">
                <h4 class="selecione">Selecione as Experiências</h4>
            </div>
            <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div>
            <!-- <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://i.ibb.co/0DMycPh/cardapio3.jpg" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://i.ibb.co/0DMycPh/cardapio3.jpg" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://i.ibb.co/0DMycPh/cardapio3.jpg" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://i.ibb.co/0DMycPh/cardapio3.jpg" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="/Experiencia" class="itens-cardapio">
                    <div class="col-lg-12">
                        <div class="card mb-3 produtos">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="https://i.ibb.co/0DMycPh/cardapio3.jpg" class="card-img" alt="Prato 1">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim veniam laborum ad architecto. Illo, beatae rem dolore delectus dignissimos ducimus necessitatibus quia soluta. Aspernatur quisquam natus placeat atque totam eaque.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </a>
            </div> -->
        </div>
    </section>
    <div class="container">
        <div>
            <h1 class="review-section-title">Comentários</h1>
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
            </span></p>
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
            </span></p>
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
            </span></p>
            <q>Achei mais ou menos, a comida era boa mas um peixe ficou me encarando por 30 minutos, me senti desconfortável</q>
        </div>
        <div class="last-item">
            <button type="button" class="btn-buyhood">Mais avaliações</button>
        </div>
    </div>
@endsection
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/q7Wkrgq/icon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="exeperiencia.css">
        <title>Buyhood - Experiência</title>
    </head>
    <body>
        <?php require_once('../Header,footer,index/header.php')?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="product-title">Aprenda a fazer o Brownie da família com Thiago Bullara</h1>
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
                        </ul>
                    </div>
                </div>
            </div>
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
                                <img class="d-block w-100" src="http://via.placeholder.com/540x337" alt="Primeira Foto">
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
                        <li class="description-itens">Aprovado pelo chefe Thiago Bullara</li>
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
                            <label for="data"><h4>Reserve uma data</h4></label>
                        </div>
                        <div class="calendar">
                            <select name="day" class="form-control day" id="data">
                                <option default selected disabled>Selecione um dia</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="month" class="form-control month" id="data">
                                <option default selected disabled>Selecione um mês</option>
                                <option value="1">Jan</option>
                                <option value="2">Fev</option>
                                <option value="3">Mar</option>
                                <option value="4">Abr</option>
                                <option value="5">Mai</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Ago</option>
                                <option value="9">Set</option>
                                <option value="10">Out</option>
                                <option value="11">Nov</option>
                                <option value="12">Dez</option>
                            </select>
                        </div>
                    </div>                
                    <div class="pricing">
                        <button type="button" class="buy-btn btn btn-outline-dark">Comprar</button>
                    </div>
                </div>       
            </div>
        </div>
        <div class="container container-last">
            <div class="row about">
                <div class="col-lg-2">
                    <h2>Sobre</h2>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sunt architecto dolore asperiores odio ducimus assumenda delectus atque, dolorum natus blanditiis quia fuga sapiente qui eaque eius error? Voluptas, illum!</p>
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
    
        <?php include('../Header,footer,index/footer.php')?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

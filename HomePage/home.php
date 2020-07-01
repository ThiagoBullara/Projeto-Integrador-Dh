<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="../EstilosPadrao/styleDefault.css">
        <title>Buyhood</title>
    </head>
    <body>
        <?php require_once('../Header,footer,index/header.php')?>
        <section class="container-fluid">
            <div class="banner row">
                <div class="col-lg-4">
                    <div class="banner-info">
                        <h1>Conheça o BuyHood</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, nobis quisquam magnam excepturi labore natus deserunt asperiores provident error incidunt vitae, laborum, molestias aperiam maxime facere perferendis pariatur odit obcaecati.</p>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
                    <input type="text" name="search" id="search" class="input-search" placeholder="Busque por um restaurantes ou uma experiência">
                    <button class="botao button-search">Buscar</button>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <p class="howto-main-title col-lg-12">Como usar o Buyhood</p>
            </div>
            <div class="info row">
                <div class="howto col-lg-3">
                    <p class="howto-icons"><svg class="bi bi-person-check" width="5em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM1.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM6 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm6.854.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      </svg></p>
                    <p class="howto-title">Cadastre-se!</p>
                    <p class="howto-description">Crie uma conta para poder desfrutar da melhor gastronomia da região</p>
                </div>
                <div class="col-lg-3">
                    <p class="howto-icons"><svg class="bi bi-search" width="4em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                      </svg></p>
                    <p class="howto-title">Explore as nossas opções</p>
                    <p class="howto-description">Descubra todas as culinárias e experiências que estão bem debaixo do seu nariz!</p>
                </div>
                <div class="col-lg-3">
                    <p class="howto-icons"><svg class="bi bi-basket2" width="4em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M1.111 7.186A.5.5 0 0 1 1.5 7h13a.5.5 0 0 1 .489.605l-1.5 7A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395l-1.5-7a.5.5 0 0 1 .1-.42zM2.118 8l1.286 6h9.192l1.286-6H2.118z"/>
                        <path fill-rule="evenodd" d="M11.314 1.036a.5.5 0 0 1 .65.278l2 5a.5.5 0 1 1-.928.372l-2-5a.5.5 0 0 1 .278-.65zm-6.628 0a.5.5 0 0 0-.65.278l-2 5a.5.5 0 1 0 .928.372l2-5a.5.5 0 0 0-.278-.65z"/>
                        <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zM0 6.5A.5.5 0 0 1 .5 6h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1z"/>
                      </svg></p>
                    <p class="howto-title">Adicione tudo no seu carrinho</p>
                    <p class="howto-description">São milhares de pratos e experiências que você pode escolher eat-in ou take-away!</p>
                </div>
                <div class="col-lg-3">
                    <p class="howto-icons"><svg class="bi bi-emoji-smile" width="4em" height="5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
                        <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                      </svg></p>
                    <p class="howto-title">Aproveite os benefícios</p>
                    <p class="howto-description">O Buyhood está aqui para ajudar você a explorar os sabores do seu bairro e descobrir novos lugares para comer que estão bem pertinho de você</p>
                </div>
            </div>
            <div class="howto-button row">
                <div class="col-lg-12">
                    <button type="button" class="btn btn-info">Explore</button>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/2/20/Capa_CD_Carrossel.jpg" alt="Aqui vai ter um carousel">
                    </div>
                </div>
            </div>
        </section>
        <section>
        <div class="container">
            <div class="subtitulo row">
                <div class="col-lg-12" style="text-align: center;">
                    <h2>Restaurantes incríveis</h2>
                </div>
            </div>
            <div class="sub-imagem row">
                <div class="col-lg-6">
                    <a href="#"><img src="https://images.unsplash.com/photo-1574164052277-b9ea797de8e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" width="105%" alt=""></a>
                </div>
                <div class="col-lg-6">
                    <a href="#"><img src="https://images.unsplash.com/photo-1574164052277-b9ea797de8e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" width="105%" alt=""></a>
                </div>
            </div>
            <div class="subtitulo row">
                <div class="col-lg-12" style="text-align: center;">
                    <h2>Experiencias incríveis</h2>
                </div>
            </div>
            <div class="sub-imagem row">
                <div class="col-lg-6">
                    <a href="#"><img src="https://images.unsplash.com/photo-1574164052277-b9ea797de8e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" width="105%" alt=""></a>
                </div>
                <div class="col-lg-6">
                    <a href="#"><img src="https://images.unsplash.com/photo-1574164052277-b9ea797de8e4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" width="105%" alt=""></a>
                </div>
            </div>
        </div>
        </section>
        <section>
            <!-- <p>Aqui vai ter alguma outra coisa</p> -->
        </section>


        <?php include('../Header,footer,index/footer.php')?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/0tNkSBr/Screenshot-1-removebg-preview.png%22%3E">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <title>Buyhood</title>
    </head>

    <body>

        <?php require_once ("../Includes/header.php"); ?>
        
        <section class="container-fluid banner">
            <ul>
                <li class="sobre">
                    <h1>Conheça o Buyhood</h1>
                    <p>
                        O Buyhood é uma plataforma onde você descobre e desfruta de experiências 
                        gastronômicas de uma maneira única. Trabalhamos em uma pequena área entre o Morumbi, 
                        Campo Belo, Pinheiros e Paraíso, confira toda nossa área de atendimento 
                        <a href="../AreaQueAtendemos/areaQueAtendemos.php">aqui!</a>
                    </p>
                </li>
                <li class="buscar">
                    <input type="text" class="inp" placeholder="Procure por uma experiência!">
                    <input type="submit" value="Buscar" class="btn-inp">
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
                    <p class="how-to-description">São milhares de pratos e experiências que você pode escolher eat-in ou take-away!</p>
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
                    <a href="../AllRestaurants/allRestaurants.php"><button class="how-to-button">Explore</button></a>
                </div>
            </div>
        </section>

        <section class="container-fluid carrosel">
            <p>Aqui vai ter um carrosel</p>
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
                        <a href="../PaginaDeRestaurante/restaurantes.php">
                            <img src="https://i.ibb.co/KWy48wt/restaurante.jpg" alt="Melhor Restaurante" style="width:100%">
                            <div class="container">
                                <p>Conheça nosso melhor parceiro</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: -webkit-center;">
                    <div class="polaroid">
                        <a href="../PaginaDeExperiencia/experiencia.php">
                            <img src="https://i.ibb.co/9HswNbN/experiencia.jpg" alt="Melhor Experiência" style="width:100%">
                            <div class="container">
                                <p>Conheça nossa melhor experiência</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once("../Includes/footer.php"); ?>

    </body>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
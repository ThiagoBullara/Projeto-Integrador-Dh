<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>

* {
    padding: 0; 
    margin: 0; 
    box-sizing: border-box;
}

header {
    border-bottom: 1px solid rgba(0, 0, 0, 0.425);
    box-shadow: 0 1px 10px 0.5px rgba(0, 0, 0, 0.473);
    margin-bottom: 10px;
    font-size: 15px;
}

.header {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav, .logo{
    align-items: center;
}

.navbarmain li {
    display: inline-block;
    margin: 0 10px;
    margin-top: 14px;
}

.navbarmain .sing-up {
    border: 1px solid #02acaf;
    border-radius: 5px;
    padding: 10px;
    transform: none;
    transition: 1s all;
}

.navbarmain a {
    color: #000;
    text-decoration: none !important;
}

.navbarmain a:hover {
    color: #02acaf;
}

.navbarmain .sing-up a {
    text-decoration: none;
    color: #02acaf;
    transition: 0.5s all;
}

.navbarmain .sing-up:hover {
    background-color: #02acaf;
    cursor: pointer;
    transition: 1s all;
}

.navbarmain .sing-up:hover a {
    color: white;
    transition: 0.5s all;
}

</style>

<?php //require('ModalLogin.php')?>
<?php //require('ModalRegistration.php')?>


<header>
    <nav class="header container-fluid">
        <div class="row">
            <div class="logo col-lg-5">
                <a href="#"><img src="https://i.ibb.co/hRDD7Pz/logo.png" alt="Logo BuyHood" width="200px"></a>
            </div>
            <div class="nav col-lg-7">
                <ul class="navbarmain">
                    <li><a href="../HomePage/home.php">Home</a></li>
                    <li><a href="../AllRestaurantPages/AllRestaurantPages.php">Restaurantes</a></li>
                    <li><a href="../PaginaDeExperiencias/Experiencias.php">Experiências</a></li>
                    <li><a href="../PaginasSobreNos/sobrenos.php">Sobre Nós</a></li>
                    <li><a href="#">Torne-se um parceiro</a></li>
                    <li><a class="sing-in" href="#">Entrar</a></li>
                    <li class="botao"><a href="#">Cadastre-se</a></li>
                    <!-- <li><a href="#myModalLogin" class="trigger-btn" data-toggle="modal">Entrar</a></li>
                    <li class="login"><a href="#myModalRegistration" class="trigger-btn" data-toggle="modal">Cadastre-se</a></li> -->
                </ul>
            </div>   
        </div>
    </nav>
</header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
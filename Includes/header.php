<style>

    * {
        padding: 0; 
        margin: 0; 
        box-sizing: border-box;
    }

    header {
        background-image: linear-gradient(#1a4301, #146601);
        border-bottom: 1px solid black;
    }

    .logo .desktop {
        text-align: center;
        padding: 5px 0;
    }

    .logo .mobile {
        display: none;
    }

    .navbar {
        text-align: center;
        font-size: 17px;
        list-style: none;
        padding: 0 40px 20px 40px !important;
        margin-bottom: 0;
    }

    .navbar li a { 
        text-decoration: underline;
        color: white;
    }

    .navbar li a:hover {
        text-decoration: none;
        color: #73a942;
    }

    .botao {
        list-style: none;
        font-size: 17px;
    }

    .botao a {
        text-decoration: none;
        border: 1px solid white;
        padding: 10px 20px;
        border-radius: 5px;
        color: #1a4301 !important;
        background-color: white;
    }

    .botao a:hover {
        color: white !important;
        border-color: white;
        background: none !important;
        transition: 0.5s all;
    }

    @media only screen and (max-width: 768px) {

        .navbar li a {
            display: inline-block;
            margin: 1vh 2vw;
            font-size: 20px;
        }

        .botao {
            font-size: 17px;
        }

        .botao a {
            padding: 0;
            border: none;
            background: none !important;
            color: white !important;
        }

        .botao a:hover {
            color: #73a942;
            border-color: none;
            transition: 0.5s all;
            background-color: none;
        }
    }

    @media only screen and (max-width: 420px) {
        .logo .desktop {
            display: none;
        }

        .logo .mobile {
            display: block;
            text-align: center;
            margin: 40px 0;
        }

        .navbar {
            padding: 0 !important;
            text-align: left;
            margin-bottom: 20px;
        }

        .navbar li a {
            margin: 0.5vw 2vh;
            display: block;
        }

    }

</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<header class="container-fluid">
    <div class="row">
        <div class="logo col-lg-12">
            <div class="desktop">
                <a href="../Home/home.php" ><img src="https://i.ibb.co/71JLCrG/Logo-Buy-Hood-removebg-preview.png" alt="Logo Buyhood"></a>
            </div>
            <div class="mobile">
                <a href="../Home/home.php"><img src="https://i.ibb.co/0tNkSBr/Icon.png" alt="Logo Buyhood"></a>
            </div>
        </div>
    </div>
    <nav class="row">
        <div class="nav-border col-lg-12">
            <ul class="navbar">
                <li><a href="../Home/home.php">Home</a></li>
                <li><a href="../AllRestaurants/allRestaurants.php">Restaurantes</a></li>
                <li><a href="../Sobre/sobre.php">Sobre Nós</a></li>
                <li><a href="../CadastroParceiro/partnerRegistration.php">Torne-se um parceiro</a></li>
                <li><a href="#">Entrar</a></li>
                <li class="botao"><a href="../CadastroUsuario/cadastro.php">Cadastre-se</a></li>
            </ul>
        </div>   
    </nav>
</header>


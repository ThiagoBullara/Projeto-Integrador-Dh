<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        * {
            padding: 0; 
            margin: 0; 
            box-sizing: border-box;
        }

        .logo {
            text-align: center;
            padding: 5px 0;
            background-color: #146601;
        }

        .navbar {
            text-align: center;
            border-bottom: 1px solid black;
            font-size: 17px;
            list-style: none;
            padding: 0 40px 20px 40px !important;
            background-color: #146601;
            margin-bottom: 0;
        }

        .navbar li a {
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
            padding: 10px 20px !important;
            border-radius: 5px;
            color: white;
        }

        .botao a:hover {
            color: #73a942;
            border-color: #73a942;
            background-color: white;
            transition: 0.5s all;
        }

        .nav-border {
            padding: 0 !important;
        }
    </style>
</head>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="logo col-lg-12">
                    <a href="#"><img src="https://i.ibb.co/71JLCrG/Logo-Buy-Hood-removebg-preview.png" alt="Logo Buyhood"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <nav class="row">
                <div class="nav-border col-lg-12">
                    <ul class="navbar">
                        <li><a href="../HomePage/home.php">Home</a></li>
                        <li><a href="../AllRestaurantPages/AllRestaurantPages.php">Restaurantes</a></li>
                        <li><a href="../PaginasSobreNos/sobrenos.php">Sobre Nós</a></li>
                        <li><a href="#">Torne-se um parceiro</a></li>
                        <li><a href="#">Entrar</a></li>
                        <li class="botao"><a href="#">Cadastre-se</a></li>
                    </ul>
                </div>   
            </nav>
        </div>
    </header>

</html>
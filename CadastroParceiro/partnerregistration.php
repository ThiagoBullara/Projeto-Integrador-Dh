<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Buyhood - Local Foods</title>
    </head>
    <body>
        
        <?php require_once('../Header,footer,index/header.php')?>

        <style>
        form div + div {
            margin-top: 1vw;
        }

        .label {
            width: 50vw;
        }

        .input{
            font: 1em sans-serif;   
            width: 50vw;
            border: 1px solid darkgray;
            border-radius: 2px;
        }

        </style>

        <div class="container">
            <div class="body-header">
                <h1 class="title" style="text-align:center;">Cadastro de Restaurante</h1>
                <br>
                <br>
                <p class="subtitle">Preencha o formulário para se cadastrar como parceiro no nosso site! Ou se sua intenção se cadastrar como usuário da nossa plataforma, clique <a href="../CadastroUsuario/cadastro.php">aqui</a>.</p>
                <p class="subsubtitle">Essas informações são necessárias para cadastrar seu restaurante, elas serão revisadas antes de serem aceitas, você pode alterar algumas informações depois que seu cadastro for aceito, como a foto do restaurante, o endereço, etc.</p>
            </div>
            <br>
            <hr>
            <br>
            <form method="POST" enctype="multipart/form-data">

                <div>
                <label class="label" for="person-name">Nome do responsável</label>
                    <input class="input form-control" type="text" name="person-name" id="person-name" placeholder="Nome completo do responsável pela conta na plataforma, não será mostrado aos usuários">
                </div>

                <hr>

                <div>
                <label class="label" for="restaurant-name">Nome do Restaurante</label>
                    <input class="input form-control" type="text" name="restaurant-name" id="restaurant-name" placeholder="Nome do Restaurante que será exibido aos usuários">
                </div>

                <hr>

                <div>
                <label class="label" for="tax-number">CNPJ</label>
                    <input class="input form-control" type="text" name="tax-number" id="tax-number">
                </div>

                <hr>

                <div>
                <label class="label" for="address">Endereço</label>
                    <input class="input form-control" type="text" name="address" id="address" placeholder="Endereço Completo com CEP">
                </div>

                <hr>

                <div>
                <label class="label" for="phone-number">Número de Telefone</label>
                    <input class="input form-control" type="text" name="phone-number" id="phone-number" placeholder="Número de Telefone para contato, será exibido aos usuários">
                </div>

                <hr>

                <div>
                <label class="label" for="email">E-mail</label>
                    <input class="input form-control" type="email" name="email" id="email" placeholder="E-mail de acesso à plataforma">
                </div>

                <hr>

                <div>
                <label class="label" for="password">Senha</label>
                    <input class="input form-control" type="password" name="password" id="password">
                </div>

                <hr>
                
                <div>
                <label class="label" for="password">Confirmação de Senha</label>
                    <input class="input form-control" type="password" name="password" id="password">
                </div>

                <hr>

                <div>
                <label class="label" for="working-hours">Horario de Funcionamento</label>
                    <input class="input form-control" type="text" name="working-hours" id="working-hours" placeholder="Horario de Funcionamento do restaurante">
                </div>

                <hr>
                
                <div>
                <label class="label" for="photo">Foto do Restaurante</label>
                    <input class="input form-control" type="file" name="photo" id="photo">
                </div>

                <hr>
                <input type="checkbox" id="agreed-terms" name="agreed-terms" value="agreed-terms">
                <label for="agreed-terms">Eu confirmo que li e concordo com os <a href="../Terms&Conditions/TermsOfUse.php">Termos de Uso</a> e com a <a href="../Terms&Conditions/PrivacyPolicy.php">Política de Privacidade</a>.</label>
            </form>
            <br>
            <input type="submit" class="btn btn-info" value="Cadastrar">
            <br>
            <br>
        </div>
        
        <?php include('../Header,footer,index/footer.php')?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
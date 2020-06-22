<!DOCTYPE html>
    
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="singupgupchoicestyle.css">
        <title>Buyhood - Cadastro</title>
    </head>

<body>

    <?php require('ModalPartnerRegistration.php')?>
    <?php require('../ModalCadastro/modal.html')?>
    <?php require_once('../Header,footer,index/header.php')?>

    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6 mb-3 mb-md-0 registrationcard">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Seja um Parceiro!</h5>
                <p class="card-text">Se você tem um negócio na nossa região e gostaria de mais exposição, junte-se a nós
                     e crie um perfil profissional!</p>
                     <a href="#" data-toggle="modal" data-target="#myModalPartner" class="btn btn-primary">Cadastre-se como parceiro</a>
            </div>
            </div>
        </div>
        
        <div class="col-sm-6 registrationcard">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Seja um Membro!</h5>
                <p class="card-text">Os melhores produtos e serviços culinários da região, junte-se a nós e crie um perfil para explorar suas opções!</p>
                <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Cadastre-se como usuário</a>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php include('../Header,footer,index/footer.php')?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

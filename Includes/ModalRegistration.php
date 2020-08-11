<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<?php require('../CadastroParceiro/ModalPartnerRegistration.php')?>
<?php require('../ModalCadastro/modal.html')?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="modal fade" id="myModalRegistration">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-registration-option modal-body">
                                <a class="hyperlink-registration-option" href="#" data-toggle="modal" data-target="#myModalPartner" data-dismiss="modal">Cadastre-se como parceiro</a>
                                <hr>
                                <a class="hyperlink-registration-option" href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal">Cadastre-se como usuário</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<style>
    * {
    padding: 0; 
    margin: 0; 
    box-sizing: border-box;
    }
    
    .modal {
    overflow-y: auto;
    }

    .modal-open {
    overflow: auto;
    }

    .modal-registration-option{
        text-align: center;
    }

    .hyperlink-registration-option{
        text-decoration: none;
        color: black;
    }
    .hyperlink-registration-option:hover{
        text-decoration: none;
        color: black;
    }
</style>
</body>
</html>
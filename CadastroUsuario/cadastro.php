<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="https://i.ibb.co/q7Wkrgq/icon.png">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="cadastro.css">
        <title>Buyhood - Cadastre-se</title>
    </head>

    <body>
        
        <?php require_once('../Header,footer,index/header.php')?>

    <main class="meio">
      <div class="container">
        <form class="formulario" class="needs-validation" novalidate>        
        <!-- <div>
          <h1 class="titulo">Editar seu cadastro</h1><br>
        </div> -->
        <p>Preencha o formulário para se cadastrar como usuário no nosso site! Ou se sua intenção era cadastrar seu restaurante, clique <a href="../CadastroParceiro/partnerregistration.php">aqui</a></p><hr>
        <div class="form-row" >
            <div class="col">
                <div class="form-group"> 
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control form-control-lg" id="nome" placeholder="Nome" name="nome" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor preencha este campo.</div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control form-control-lg" id="sobrenome" placeholder="Sobrnome" name="sobrenome" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor preencha este campo.</div>
                </div>
            </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" placeholder="name@email.com" name="email" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            <div class="form-group">
              <label for="tel">Telefone</label>
              <input type="tel" class="form-control form-control-lg" id="tel" placeholder="Seu numero de telefone" name="tel" required>
              <div class="valid-feedback">Valido.</div>
              <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            <hr>
            <div class="form-group">
                <label for="pwd">Senha</label>
                <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Senha" name="pswd" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Confirme sua senha</label>
                <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Senha" name="pswd" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
            <hr>
            <div class="form-group">
                <label for="genero">Gênero</label>
                <select name="genero" id="genero" class="form-control form-control-lg" required>
                    <option selected disabled>selecione seu gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                    <option value="naoinformar">Prefiro não informar</option>
                </select>
            </div> 
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> Eu li e concordo com os <a href="../Terms&Conditions/TermsOfUse.php">Termos de Uso</a> e com a <a href="../Terms&Conditions/PrivacyPolicy.php">Política de Privacidade</a>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
              </label>
            </div>
            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" class="enviar">Enviar</button>
          </form>
      </div>
    </main>

    <?php include('../Header,footer,index/footer.php')?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script>
            // Disable form submissions if there are invalid fields
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
        </script>
</body>


</html>

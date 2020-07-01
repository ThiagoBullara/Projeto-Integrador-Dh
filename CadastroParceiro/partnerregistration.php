<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="partnerregistration.css">
        <title>Buyhood - Cadastro de Parceiro</title>
</head>
<body>

<?php

  if($_POST){
    $businessType = $_POST["businessType"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $businessName = $_POST["businessName"];
    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];
    $phoneNumber = $_POST["phoneNumber"];

  }else{
    $businessType = "";
    $address =  "";
    $address2 =  "";
    $businessName =  "";
    $cnpj =  "";
    $email =  "";
    $fullname =  "";
    $password =  "";
    $phoneNumber =  "";
  }

  $a_businessType = ["Restaurante", "Experiências"];

  if ($_POST) {  
    if (strlen($_POST['fullname']) == 0 ) {
      echo "Por favor, preencha este campo";
    }

    if (strlen($_POST['password']) < 8 ) {
      echo "A sua senha deve ter no mínimo 8 dígitos";
    }

    if (strlen($_POST['email']) == 0 || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
      echo "Por favor, preencha este campo com um endereço de e-mail válido";
    }

    if (strlen($_POST['cnpj']) < 14 || is_numeric($_POST['cnpj']) == false ) {
      echo "Por favor, preencha este campo com um número de CNPJ válido";
    }

    if (strlen($_POST['address']) == 0 ) {
      echo "Por favor, preencha este campo";
    }

    if (strlen($_POST['phoneNumber']) < 10 || is_numeric($_POST['phoneNumber']) == false) {
      echo "Por favor, preencha este campo com um número de telefone válido, exemplo: 11 12345678";
    }

    if (strlen($_POST['businessName']) == 0 ) {
      echo "Por favor, preencha este campo";
    }
    if(!empty($businessType) && $businessType != "Restaurante" && $businessType != "Experiências"){
      echo "Por favor, selecione qual é o tipo de negócio que você tem";
  }
} 

?>

  <?php require_once('../Header,footer,index/header.php')?>

<section style="margin-bottom: 20px;margin-top: 20px;">
  <div class="container">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
          <label for="inputAddress">Nome completo do responsável</label>
          <input type="text" class="form-control" id="inputAddress" name="fullname" value="<?=$fullname?>" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">E-mail</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="E-mail" name="email" value="<?=$email?>" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="password" value="<?=$password?>" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Endereço do negócio</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Exemplo: Avenida Paulista, 1200 - Bela Vista" name="address" value="<?=$address?>" required>
        <div class="valid-feedback">Valido.</div>
        <div class="invalid-feedback">Por favor preencha este campo.</div>
      </div>
      <div class="row">
        <div class="form-group col-lg-6">
          <label for="inputAddress2">Complemento</label>
          <input type="number" class="form-control" id="inputAddress2" placeholder="Apartamento, bloco" name="address2" value="<?=$address2?>">
        </div>
        <div class="form-group col-lg-6">
          <label for="inputPassword4">Telefone</label>
          <input type="text" class="form-control" id="inputPassword4" placeholder="00 00000000" name="phoneNumber" value="<?=$phoneNumber?>" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Nome do negócio</label>
          <input type="text" class="form-control" id="inputCity" value="<?=$businessName?>" name="businessName" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Tipo de serviço</label>
          <select name="businessType" id="inputState" class="form-control" required>
            <option default value="selecionar">Selecione</option>

            <?php foreach($a_businessType as $value): ?>
              <?php if($businessType == $value){ ?>
                <option selected value="<?=$value?>"><?=$value?></option>
              <?php }else{ ?>
                <option value="<?=$value?>"><?=$value?></option>
            <?php }endforeach; ?>

          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label for="inputZip">CNPJ</label>
          <input type="text" class="form-control" id="inputZip" name="cnpj" value="<?=$cnpj?>" required>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" required>
          <label class="form-check-label" for="gridCheck">
            Eu li aceito os <a href="../Terms&Conditions/TermsOfUse.php">Termos e condições</a> e concordo com a <a href="../Terms&Conditions/PrivacyPolicy.php">Política de Privacidade.</a>
          </label>
          <div class="valid-feedback">Valido.</div>
          <div class="invalid-feedback">Por favor preencha este campo.</div>
        </div>
      </div>
      <div class="row">
      <p class="col-lg-1"></p>
      <button type="submit" class="btn btn-primary col-lg-10">Cadastrar</button>
      </div>
    </form>
  </div>
</section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <?php require_once('../Header,footer,index/footer.php')?>
    
</body>
</html>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/q7Wkrgq/icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/CadastroDeExperiencia.css')}}">
        <title>Cadastre-se - BuyHood </title>
    </head>
    <body>
      
    <main class="meio">
      <div class="container">
        <form class="formulario" class="needs-validation" novalidate>        
        <div>
          <h1 class="titulo">Cadastro de Experiência</h1><br>
        </div> 
        <p>Preencha o formulário para se cadastrar uma experiência no n! Ou se sua intenção era cadastrar seu restaurante, clique <a href="../CadastroParceiro/partnerregistration.php">aqui</a>.</p>
        <div class="form-row" >
            <div class="col-lg-12">
                <div class="form-group"> 
                    <label for="experiencia">Experiência</label>
                    <input type="text" class="form-control form-control-lg" id="experiencia" placeholder="Jantar ao ar livre" name="experiencia" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor preencha este campo.</div>
                </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="localizacao">Localização</label>
                  <input type="text" class="form-control form-control-lg" id="localizacao" placeholder="av paulista 234 jardins" name="localizacao" required>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
            </div>  

            <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="telefone">Telefone</label>
                  <input type="tel" class="form-control form-control-lg" id="tel" placeholder="+55 (11) 995555555" name="telefone" required>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
            </div>
              
            <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="localizacao">Descrição</label><br>
                  <textarea name="descricao" id="descricao" cols="151" rows="5"></textarea>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
            </div>  
            
            <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="numero">Numero de pessoas</label>
                  <input type="number" class="form-control form-control-lg" id="numero" placeholder="4" name="numero"required>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
            </div>          
            
            <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="localizacao">Imagem da experiência</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
            </div>              

            <button type="submit" class="btn btn-outline-primary btn-lg btn-block" class="enviar">Enviar</button>
          </form>
      </div>
    </main>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

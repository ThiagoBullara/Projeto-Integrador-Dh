<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/q7Wkrgq/icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="cadastro.css">
        <title>Cadastre-se - BuyHood </title>
    </head>
    <body>
      <header>
        <div class="container-fluid">
            <div class="row">
                <div class="logo col-lg-12">
                    <a href="../HomePage/home.html"><img src="https://i.ibb.co/71JLCrG/Logo-Buy-Hood-removebg-preview.png" alt="Logo Buyhood"></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <nav class="row">
                <div class="nav-border col-lg-12">
                    <ul class="navbar">
                        <li><a href="../HomePage/home.html">Home</a></li>
                        <li><a href="../Restaurantes_Experiencias/restaurantes_experiencias.html">Restaurantes</a></li>
                        <li><a href="../PaginasSobreNos/sobrenos.html">Sobre Nós</a></li>
                        <li><a href="#">Torne-se um parceiro</a></li>
                        <li><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entrar</a>
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3">
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">E-mail</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@examplo.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormPassword1">Senha</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha">
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">Lembrar login</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Entrar</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Novo por aqui? Cadastre-se!</a>
                                        <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                                </div></li>
                        <li class="botao"><a href="../CadastroUsuario/cadastro.html">Cadastre-se</a></li>
                    </ul>
                </div>   
            </nav>
        </div>
    </header>  
    <main class="meio">
      <div class="container">
        <form class="formulario" class="needs-validation" novalidate>        
        <!-- <div>
          <h1 class="titulo">Editar seu cadastro</h1><br>
        </div> -->
        <p>Preencha o formulário para se cadastrar como usuário no nosso site! Ou se sua intenção era cadastrar seu restaurante, clique <a href="../CadastroParceiro/partnerregistration.html">aqui</a></p>
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

    <footer class="container-fluid">
      <div class="row">
          <div class="col-lg-3">
          </div>
          <div class="footerinfo1 col-lg-2">
              <ul class="listfooter">
                  <li class="listfootertitle">Sobre o Buyhood</li>
                  <li class="listfooteritem"><a href="../PaginasSobreNos/sobrenos.php">Sobre nós</a></li>
                  <li class="listfooteritem"><a href="../CadastroParceiro/partnerregistration.php">Trabalhe conosco</a></li>
                  <li class="listfooteritem"><a href="../AllRestaurantPages/AllRestaurantPages.php">Restaurantes</a></li>
                  <li class="listfooteritem"><a href="../PaginaDeExperiencias/Experiencias.php">Experiências</a></li>
                  <li class="listfooteritem"><a href="../AreaQueAtendemos/AreaQueAtendemos.php">Área que atendemos</a></li>
              </ul>
          </div>
          <div class="footerinfo2 col-lg-2">
              <ul class="listfooter">
                  <li class="listfootertitle">Contato</li>
                  <li class="listfooteritem"><a href="../FAQ/FAQ.php">F.A.Q.</a></li>
                  <li class="listfooteritem"><a href="#">Envie-nos um e-mail</a></li>
                  <li class="listfooteritem"><a href="../Careers/Careers.php">Carreiras</a></li>
                  <li class="listfooteritem"><a href="../Terms&Conditions/TermsOfUse.php">Termos de uso</a></li>
                  <li class="listfooteritem"><a href="../Terms&Conditions/PrivacyPolicy.php">Política de Privacidade</a></li>
              </ul>
          </div>
          <div class="footer-partner col-lg-4">
              <ul class="listfooter">
                  <li class="listfootertitle">Seja nosso parceiro</li>
                  <li class="listfooteritem">🗹 Ganhe muita visibilidade on-line</li>
                  <li class="listfooteritem">🗹 Clientes novos e fidelizados</li>
                  <li class="listfooteritem">🗹 Conheça seu público-alvo</li>
                  <li class="listfooteritem">🗹 Alto potencial de retorno financeiro</li>
                  <li class="listfooteritem"><div class="button-footer"><a href="../CadastroParceiro/partnerregistration.php">Cadastre o seu restaurante</a><div></li>
              </ul>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-5"></div>
              <div class="social-media col-lg-4">
                  <div>
                      <a href="https://www.facebook.com/Buyhood-Local-Foods-107059267736528/" class="fa fa-facebook"></a>
                      <a href="https://twitter.com/BuyhoodL" class="fa fa-twitter"></a>
                      <a href="https://www.youtube.com/channel/UChvSdcECiBqYHsSGBWaU3_Q?view_as=subscriber" class="fa fa-youtube"></a>
                      <a href="https://www.instagram.com/buyhoodlocalfoods/" class="fa fa-instagram"></a>
                  </div>
              </div>
          </div>
      <div class="copyright">
      <span>&copy; 2020 BuyHood - BUYHOOD BRASIL INTERMEDIAÇÃO DE NEGÓCIOS LTDA.</span>
      </div>
  </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

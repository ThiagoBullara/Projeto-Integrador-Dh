<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/0tNkSBr/Screenshot-1-removebg-preview.png%22%3E">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/padrao.css')}}">
        @yield('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> @yield('titulo') </title>
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                <div class="logo col-lg-12">
                    <div class="desktop">
                        <a href="/Home" ><img src="https://i.ibb.co/71JLCrG/Logo-Buy-Hood-removebg-preview.png" alt="Logo Buyhood"></a>
                    </div>
                    <div class="mobile">
                        <a href="/Home"><img src="https://i.ibb.co/0tNkSBr/Icon.png" alt="Logo Buyhood"></a>
                    </div>
                </div>
            </div>
            <nav class="row">
                <div class="nav-border col-lg-12">
                    <ul class="navbar">
                        <li><a href="/Home">Home</a></li>
                        <li><a href="/Restaurantes">Restaurantes</a></li>
                        <li><a href="/Experiencias">Experiências - Não clicar</a></li>
                        <li><a href="/SobreNos">Sobre Nós</a></li>
                        <li><a href="/CadastroDeParceiro">Torne-se um parceiro</a></li>
                        <li><a href="#">Entrar</a></li>
                        <li class="botao"><a href="/CadastroUsuario">Cadastre-se</a></li>
                    </ul>
                </div>   
            </nav>
        </header>

        @yield('conteudo')
        
        <footer class="container-fluid">
            <div class="row">
                <div class="footerinfo1 col-lg-4">
                    <ul class="listfooter">
                        <li class="listfootertitle">Sobre o Buyhood</li>
                        <li class="listfooteritem"><a href="/SobreNos">Sobre nós</a></li>
                        <li class="listfooteritem"><a href="/CadastroDeParceiro">Trabalhe conosco</a></li>
                        <li class="listfooteritem"><a href="/Restaurantes">Restaurantes</a></li>
                        <li class="listfooteritem"><a href="/Area-de-Atendimento">Área que atendemos</a></li>
                    </ul>
                </div>
                <div class="footerinfo2 col-lg-4">
                    <ul class="listfooter">
                        <li class="listfootertitle">Contato</li>
                        <li class="listfooteritem"><a href="/FAQ">F.A.Q.</a></li>
                        <li class="listfooteritem"><a href="/Contato">Contato</a></li>
                        <li class="listfooteritem"><a href="/Careers">Carreiras</a></li>
                        <li class="listfooteritem"><a href="/TermosDeUso">Termos de uso</a></li>
                        <li class="listfooteritem"><a href="/PoliticaDePrivacidade">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="footer-partner col-lg-4">
                    <ul class="listfooter">
                        <li class="listfootertitle">Seja nosso parceiro</li>
                        <li class="listfooteritem">🗹 Ganhe muita visibilidade on-line</li>
                        <li class="listfooteritem">🗹 Clientes novos e fidelizados</li>
                        <li class="listfooteritem">🗹 Conheça seu público-alvo</li>
                        <li class="listfooteritem">🗹 Alto potencial de retorno financeiro</li>
                        <li class="listfooteritem"><div class="button-footer"><a href="/CadastroDeParceiro">Cadastre o seu restaurante</a><div></li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/Buyhood-Local-Foods-107059267736528/" class="fa fa-facebook" target="_blank"></a>
                <a href="https://twitter.com/BuyhoodL" class="fa fa-twitter" target="_blank"></a>
                <a href="https://www.youtube.com/channel/UChvSdcECiBqYHsSGBWaU3_Q?view_as=subscriber" class="fa fa-youtube" target="_blank"></a>
                <a href="https://www.instagram.com/buyhoodlocalfoods/" class="fa fa-instagram" target="_blank"></a>
            </div>
            <div class="copyright">
                <span>&copy; 2020 BuyHood - BUYHOOD BRASIL INTERMEDIAÇÃO DE NEGÓCIOS LTDA.</span>
            </div>
        </footer>

        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>

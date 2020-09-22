<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/0tNkSBr/Screenshot-1-removebg-preview.png%22%3E">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/padrao.css')}}">
        @yield('css')
        <script src="https://kit.fontawesome.com/0299beac0d.js" crossorigin="anonymous"></script>
        <title> @yield('titulo') </title>
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="logo-desktop">
                        <a href="/home" ><img src="https://i.ibb.co/BjrHN7h/Logo-Buy-Hood-Png.png" alt="Logo Buyhood"></a>
                    </div>
                    <div class="logo-mobile">
                        <a href="/home"><img src="https://i.ibb.co/0tNkSBr/Icon.png" alt="Logo Buyhood Mobile"></a>
                    </div>
                </div>
                <ul class="col-lg-6 nav-buyhood">
                    <li><a class="navbar-item" href="/home">Home</a></li>
                    <li><a class="navbar-item" href="/ListaDeExperiencias">Experiências</a></li>
                    <li><a class="navbar-item" href="/SobreNos">Sobre</a></li>
                    @guest
                        <li><a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                            <li><a class="navbar-item" href="{{ route('register') }}">{{ __('Cadastrar-se') }}</a></li>
                        @endif
                    @else
                        <li>
                            <a class="navbar-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img style="width:40px; height:40px;border-radius:50%;" src="{{'/storage/img/'.Auth::user()->fotoPerfil }}" alt="{{ Auth::user()->fotoPerfil }}">{{ Auth::user()->name }}</a>
                            <div class="user-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/PaginaDePerfil/">{{ __('Perfil') }}</a>
                                @if (Auth::user()->email == "buyhoodlocalfoods@gmail.com")
                                    <a class="dropdown-item" href="/CadastroDeExperiencia/">{{ __('Cadastro de Experiências') }}</a>
                                @endif
                                <a class="dropdown-item" href="/PaginaDePerfil/">{{ __('Minhas Compras') }}</a>
                                <a class="dropdown-item" href="{{ route('carrinho.exibir') }}">{{ __('Carrinho') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>                    
            </div>                           
        </header>

        @yield('conteudo')
        
        <footer class="container-fluid">
            <div class="row">
                <div class="logo footer-partner col-lg-6">
                    <div class="logo-desktop">
                        <a href="/home" ><img src="https://i.ibb.co/19p7LJG/Screenshot-2-removebg-preview.png" alt="Logo Buyhood"></a>
                    </div>
                    <div class="logo-mobile">
                        <a href="/home"><img src="https://i.ibb.co/2tYsbt4/Screenshot-1-removebg-preview.png" alt="Logo Buyhood"></a>
                    </div>
                </div>
                    <div class="links col-lg-6">
                        <p class="mb-4" style="font-size:15px;font-weight:bold;">Saiba Mais!</p>
                        <ul class="listfooter">
                            <li class="listfooteritem"><a href="/SobreNos">Sobre nós</a></li>
                            <li class="listfooteritem"><a href="/Area-de-Atendimento">Área que atendemos</a></li>
                            <li class="listfooteritem"><a href="/FAQ">F.A.Q.</a></li>
                            <li class="listfooteritem"><a href="/Contato">Contato</a></li>
                            <li class="listfooteritem"><a href="/TermosDeUso">Termos de uso</a></li>
                            <li class="listfooteritem"><a href="/PoliticaDePrivacidade">Política de Privacidade</a></li>
                        </ul>
                    </div>
            </div>

            <div class="row">
                <div class="copyright col-lg-6">
                    <span>&copy; 2020 BuyHood - BUYHOOD BRASIL INTERMEDIAÇÃO DE NEGÓCIOS LTDA.</span>
                </div>
                <div class="col-lg-6">
                    <a href="https://www.youtube.com/channel/UChvSdcECiBqYHsSGBWaU3_Q?view_as=subscriber" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
                    <a href="https://www.instagram.com/buyhoodlocalfoods/"><i class="fab fa-instagram" target="_blank"></i></a>
                    <a href="https://twitter.com/BuyhoodL"><i class="fab fa-twitter" target="_blank"></i></a>
                    <a href="https://www.facebook.com/Buyhood-Local-Foods-107059267736528/"><i class="fab fa-facebook" target="_blank"></i></a>                        
                </div>
            </div>
        </footer>
        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>

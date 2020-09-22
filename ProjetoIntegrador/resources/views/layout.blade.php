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
                <div class="col-lg-2">
                    <div class="logo-desktop"><a href="/home"><img src="https://i.ibb.co/C1ZPDby/Screenshot-3-removebg-preview.png" width="250px" alt="Logo Buyhood"></a></div>
                </div>
                <ul class="col-lg-4 nav-buyhood">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/ListaDeExperiencias">Experiências</a></li>
                    <li><a href="/SobreNos">Sobre</a></li>
                </ul>
                <ul class="col-lg-6 nav-buyhood-login">
                    <li>
                        <form action="/ListaDeExperienciasBuscar" method="GET">
                            <div class="input-group pesquisa-buyhood">
                                <input type="search" class="form-control" name="tipo" placeholder="Pesquisar na BuyHood">
                                <div class="input-group-append">
                                    <button type="submit" class="form-control icone-pesquisar-buyhood">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __('Cadastrar-se') }}</a></li>
                        @endif
                    @else
                        <li>
                            <a class="navbar-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img style="width:40px; height:40px;border-radius:50%; margin-right: 10px;" src="{{'/storage/img/'.Auth::user()->fotoPerfil }}" alt="{{ Auth::user()->fotoPerfil }}">{{ Auth::user()->name }}</a>
                            <div class="user-dropdown dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top: 20px;">
                                <a class="dropdown-item" href="/PaginaDePerfil/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>  {{ __('Perfil') }}</a>
                                @if (Auth::user()->email == "buyhoodlocalfoods@gmail.com")
                                    <a class="dropdown-item" href="/CadastroDeExperiencia/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0H4zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/></svg>  {{ __('Cadastro de Experiências') }}</a>
                                @endif
                                <a class="dropdown-item" href="/PaginaDePerfil/"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/></svg>  {{ __('Minhas Compras') }}</a>
                                <a class="dropdown-item" href="{{ route('carrinho.exibir') }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/></svg>  {{ __('Carrinho') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-closed-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 1a1 1 0 0 0-1 1v13H1.5a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2a1 1 0 0 0-1-1H4zm2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>  {{ __('Sair') }}</a>
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
                        <a href="/home" ><img src="https://i.ibb.co/RSCPMG8/Screenshot-5-removebg-preview.png" alt="Logo Buyhood"></a>
                    </div>
                    <div class="logo-mobile">
                        <a href="/home"><img src="https://i.ibb.co/fqPwfhs/Screenshot-2-removebg-preview.png" alt="Logo Buyhood"></a>
                    </div>
                </div>
                    <div class="links col-lg-6">
                        <p class="mb-4" style="font-size:20px;font-weight:bold;">Saiba Mais!</p>
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

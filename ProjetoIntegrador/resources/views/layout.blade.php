<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/0tNkSBr/Screenshot-1-removebg-preview.png%22%3E">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/padrao.css')}}">
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        @yield('css')
        <script src="https://kit.fontawesome.com/0299beac0d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <title> @yield('titulo') </title>
    </head>
    <body>
        <header class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo-desktop"><a href="/home"><img src="https://i.ibb.co/C1ZPDby/Screenshot-3-removebg-preview.png" width="250px" alt="Logo Buyhood"></a></div>
                    <div class="logo-mobile"><a href="/home"><img src="https://i.ibb.co/RNy1YxH/Screenshot-4-removebg-preview.png" alt="Logo Buyhood" width="70%"></a></div>
                </div>
                <ul class="col-lg-8 nav-buyhood">    
                    <li class="barra-de-pesquisa">
                        <form action="/ListaDeExperienciasBuscar" method="GET">
                            <div class="input-group pesquisa-buyhood pesquisa-buyhood-mobile">
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
                    <li><a class="item-nav-buyhood" href="/home">Home</a></li>
                    <li><a class="item-nav-buyhood" href="/ListaDeExperiencias">Experiências</a></li>
                    @guest
                        <li><a class="item-nav-buyhood" href="#" data-toggle="modal" data-target="#modalLogin">{{ __('Login') }}</a></li>
                            <div class="modal fade" id="modalLogin">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="d-flex justify-content-center h-100">
                                            <div class="user_card">
                                                <div class="d-flex justify-content-center">
                                                    <div class="brand_logo_container">
                                                        <img src="https://i.ibb.co/0tNkSBr/Icon.png" width="40%"class="brand_logo" alt="Logo">                                                            
                                                    </div>
                                                </div>
                                                <div style="text-align:end;">
                                                    <a href="#" data-dismiss="modal">X</a>
                                                </div>
                                                <div class="d-flex justify-content-center form_container">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf

                                                        <div class="row input-group mb-2">
                                                            <div class="col-md-3 input-group-append">
                                                                <label for="email" class="col-form-label">{{ __('Email') }}</label>
                                                            </div>
                                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                            <input id="email" type="email" class="cold-md-8 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>

                                                        <div class="row input-group mb-2">
                                                        <div class="col-md-3 input-group-append">
                                                                <label for="password" class="col-form-label">{{ __('Senha') }}</label>
                                                            </div>
                                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                            <input id="password" type="password" class="cold-md-6 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="remember">
                                                                    {{ __('Mantenha-me conectado') }}
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-center mt-3 login_container">
                                                            <button type="submit" class="login_btn">
                                                                {{ __('Login') }}
                                                            </button>                                                                
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="mt-4">
                                                    <div class="d-flex justify-content-center links">
                                                        Não tem uma conta? <a href="/register" class="ml-2">Cadastre-se!</a>
                                                    </div>
                                                    @if (Route::has('password.request'))
                                                        <div class="d-flex justify-content-center links">
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Esqueceu sua senha?') }}
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @if (Route::has('register'))
                            <li><a class="item-nav-buyhood" href="#" data-toggle="modal" data-target="#modalCadastro">{{ __('Cadastrar-se') }}</a></li>
                            <div class="modal fade" id="modalCadastro">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header">                                                     
                                                        <div style="text-align:end;">
                                                            <a href="#" data-dismiss="modal">X</a>
                                                        </div>
                                                        {{ __('Cadastro') }}
                                                    </div>
                                                    <div class="card-body">
                                                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" onsubmit="return validateRecaptcha();">
                                                            @csrf

                                                            <div class="form-group row">
                                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="fotoPerfil" class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>

                                                                <div class="col-md-6">
                                                                    <input id="fotoPerfil" type="file" name="fotoPerfil" class="form-control" value="{{ old('fotoPerfil') }}">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mb-0">
                                                                <div class="col-md-6 offset-md-4">
                                                                <div class="g-recaptcha mb-4" data-sitekey="6LeLw9EZAAAAAINZkXq9ANQ6lwG9ntKJRwlamNZT"></div>
                                                                    <script>
                                                                        function validateRecaptcha() {
                                                                            var response = grecaptcha.getResponse();
                                                                            if (response.length === 0) {
                                                                                alert("Você não validou o reCAPTCHA");
                                                                                return false;
                                                                            } else {
                                                                                alert("Conta criada com sucesso, você receberá um e-mail para confirmação em breve");
                                                                                return true;
                                                                            }
                                                                        }
                                                                    </script>
                                                                    <button type="submit" class="login_btn">
                                                                        {{ __('Cadastrar') }}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>      
                            </div>
                        @endif
                        @else
                        <li>
                            <a class="navbar-item dropdown-toggle item-nav-buyhood" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><img style="width:40px; height:40px;border-radius:50%; margin-right: 10px;background-color:gray;" src="{{'/storage/img/'.Auth::user()->fotoPerfil }}" alt="{{ Auth::user()->fotoPerfil }}">{{ Auth::user()->name }}</a>
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

        <!-- Itens do header linhas 40 42 46 -->

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
                            <li class="listfooteritem"><a href="/SobreNos#Contato" id="AreaQueAtendemos">Área que atendemos</a></li>
                            <li class="listfooteritem"><a href="/SobreNos#FAQ">F.A.Q.</a></li>
                            <li class="listfooteritem"><a href="/SobreNos#Contato">Contato</a></li>
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
        <script src="{{asset('js/carrossel.js')}}" ></script>
        <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    </body>
</html>

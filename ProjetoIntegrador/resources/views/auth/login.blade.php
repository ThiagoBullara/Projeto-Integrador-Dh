@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('titulo')
	BuyHood - Login
@endsection

@section('conteudo')

<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="https://i.ibb.co/0tNkSBr/Icon.png" width="40%"class="brand_logo" alt="Logo">
                </div>
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
                        <button type="submit" class="btn-buyhood">
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
@endsection

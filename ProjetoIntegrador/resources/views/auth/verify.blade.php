@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('titulo')
	BuyHood - Area de atendimento
@endsection

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirme seu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Uma novo link de verificação foi enviado ao seu e-mail') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor, confirme seu email') }}
                    {{ __('Se você não recebeu o e-mail com o link de verificação') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn-buyhood p-0 m-0 align-baseline">{{ __('clique aqui para enviar novamente') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

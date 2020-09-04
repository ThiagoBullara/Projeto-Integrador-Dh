@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDePerfil.css')}}">
@endsection

@section('titulo')
	BuyHood - Perfil
@endsection

@section('conteudo')

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-12 mt-4" >
                <h1>Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-5 mt-5 mb-5">
                <img style="width:140px; height:140px;border-radius:50%;" src="{{'/storage/img/'.$detalhesPerfil->fotoPerfil }}" alt="{{ $detalhesPerfil->fotoPerfil }}" class="imagem-mobile">    
            </div>
            <div  class="col-lg-6 mt-5 mb-5">
                <h3>{{ $detalhesPerfil->name }}</h3>
                <p>Email: {{ $detalhesPerfil->email }}</p>
                <a href="/EditarPerfil/"><button class="btn btn-primary">Editar Perfil</button></a>
                <a href="/DeletarPerfil/"><button class="btn btn-danger">Deletar Perfil</button></a>
            </div>
        </div>

        <hr>

        <div class="compras">
            <h1>Suas Compras</h1>
        </div>

        <hr>

        <div class="listaCompras">
            <h3>Você ainda não realizou nenhuma compra</h3>
        </div>
        
    </div>
    
@endsection
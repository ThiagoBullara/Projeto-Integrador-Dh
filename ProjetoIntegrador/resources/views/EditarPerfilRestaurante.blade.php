@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/EditarPerfilRestaurante.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Parceiro
@endsection

@section('conteudo')
    <div class="container corpo">
        <div class="titulo">
            <h1>Editar Restaurante</h1>
        </div>
        <div>
            <form action="/CadastroDeParceiro" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="nomeProprietario">Nome do proprietário</label>
                <input class="form-control mb-4" type="text" name="nomeProprietario" id="nomeProprietario" placeholder="Nome do responsavel do restaurante">

                <label for="nomeRestaurante">Nome do restaurante</label>
                <input class="form-control mb-4" type="text" name="nomeRestaurante" id="nomeRestaurante">

                <label for="descricao">Descrição</label>
                <textarea class="form-control mb-4" type="text" name="descricao" id="descricao"></textarea>

                <label for="descricaoCardapio">Descrição Cardápio</label>
                <textarea class="form-control mb-4" type="text" name="descricaoCardapio" id="descricaoCardapio"></textarea>

                <label for="cnpj">Cnpj</label>
                <input class="form-control mb-4" type="text" name="cnpj" id="cnpj">

                <label for="endereco">Endereço</label>
                <input class="form-control mb-4" type="text" name="endereco" id="endereco">

                <label for="telefone">Número de telefone</label>
                <input class="form-control mb-4" type="text" name="telefone" id="telefone">

                <label for="email">E-mail</label>
                <input class="form-control mb-4" type="email" name="email" id="email">

                <label for="password">Senha</label>
                <input class="form-control mb-4" type="password" name="password" id="password">
        
                <label for="passwordConfirma">Confirmação de senha</label>
                <input class="form-control mb-4" type="password" name="passwordConfirma" id="passwordConfirma">

                <label for="funcionamento">Horario de funcionamento</label>
                <input class="form-control mb-4" type="text" name="funcionamento" id="funcionamento">

                <label for="foto">Foto de perfil </label>
                <input class="form-control mb-4" type="file" name="foto" id="foto">

                <label for="fotoBanner">Foto do banner do restaurante</label>
                <input class="form-control mb-4" type="file" name="fotoBanner" id="fotoBanner">

                <button type="submit" class="btn-buyhood">Editar</button>
                <button type="submit" class="btn-buyhood-delete">Deletar</button>

            </form>
        </div>
    </div>
@endsection
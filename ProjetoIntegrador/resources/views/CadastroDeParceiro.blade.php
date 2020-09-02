@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroDeParceiro.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Parceiro
@endsection

@section('conteudo')
    <div class="container corpo">
        <div>
            <h1>Cadastro de Restaurante</h1>
            <p>Preencha o formulário para se cadastrar como parceiro no nosso site! Ou se sua intenção se cadastrar como usuário da 
            nossa plataforma, clique <a href="/CadastroUsuario">aqui</a>.Essas informações são necessárias para cadastrar seu restaurante, 
            elas serão revisadas antes de serem aceitas, você pode alterar algumas informações 
            depois que seu cadastro for aceito, como a foto do restaurante, o endereço, etc.</p>
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

                <input type="checkbox" id="termosCondicao" name="termosCondicao" value="agreed-terms">
                <label for="termosCondicao">Eu confirmo que li e concordo com os <a href="/TermosDeUso">Termos de Uso</a> e com a 
                <a href="/PoliticaDePrivacidade">Política de Privacidade</a>.</label>

                <button type="submit" class="btn-buyhood">Cadastrar</button>

            </form>
        </div>
    </div>
@endsection
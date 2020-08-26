@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroDeParceiro.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Parceiro
@endsection

@section('conteudo')
    <div class="container">
        <div class="body-header">
            <h1 class="title" style="text-align:center;">Cadastro de Restaurante</h1>
            <br>
            <br>
            <p class="subtitle">Preencha o formulário para se cadastrar como parceiro no nosso site! Ou se sua intenção se cadastrar como usuário da nossa plataforma, clique <a href="/CadastroUsuario">aqui</a>.</p>
            <p class="subsubtitle">Essas informações são necessárias para cadastrar seu restaurante, elas serão revisadas antes de serem aceitas, você pode alterar algumas informações depois que seu cadastro for aceito, como a foto do restaurante, o endereço, etc.</p>
        </div>
        <br>
        <hr>
        <br>
        <form method="POST" enctype="multipart/form-data">

            <div>
            <label class="label" for="person-name">Nome do responsável</label>
                <input class="input form-control" type="text" name="person-name" id="person-name" placeholder="Nome completo do responsável pela conta na plataforma, não será mostrado aos usuários">
            </div>

            <hr>

            <div>
            <label class="label" for="restaurant-name">Nome do Restaurante</label>
                <input class="input form-control" type="text" name="restaurant-name" id="restaurant-name" placeholder="Nome do Restaurante que será exibido aos usuários">
            </div>

            <hr>

            <div>
            <label class="label" for="tax-number">CNPJ</label>
                <input class="input form-control" type="text" name="tax-number" id="tax-number">
            </div>

            <hr>

            <div>
            <label class="label" for="address">Endereço</label>
                <input class="input form-control" type="text" name="address" id="address" placeholder="Endereço Completo com CEP">
            </div>

            <hr>

            <div>
            <label class="label" for="phone-number">Número de Telefone</label>
                <input class="input form-control" type="text" name="phone-number" id="phone-number" placeholder="Número de Telefone para contato, será exibido aos usuários">
            </div>

            <hr>

            <div>
            <label class="label" for="email">E-mail</label>
                <input class="input form-control" type="email" name="email" id="email" placeholder="E-mail de acesso à plataforma">
            </div>

            <hr>

            <div>
            <label class="label" for="password">Senha</label>
                <input class="input form-control" type="password" name="password" id="password">
            </div>

            <hr>
            
            <div>
            <label class="label" for="password">Confirmação de Senha</label>
                <input class="input form-control" type="password" name="password" id="password">
            </div>

            <hr>

            <div>
            <label class="label" for="working-hours">Horario de Funcionamento</label>
                <input class="input form-control" type="text" name="working-hours" id="working-hours" placeholder="Horario de Funcionamento do restaurante">
            </div>

            <hr>
            
            <div>
            <label class="label" for="photo">Foto do Restaurante</label>
                <input class="input form-control" type="file" name="photo" id="photo">
            </div>

            <hr>
            <input type="checkbox" id="agreed-terms" name="agreed-terms" value="agreed-terms">
            <label for="agreed-terms">Eu confirmo que li e concordo com os <a href="/TermosDeUso">Termos de Uso</a> e com a <a href="/PoliticaDePrivacidade">Política de Privacidade</a>.</label>
        </form>
        <br>
        <input type="submit" class="btn-buyhood" value="Cadastrar">
        <br>
        <br>
    </div>
@endsection


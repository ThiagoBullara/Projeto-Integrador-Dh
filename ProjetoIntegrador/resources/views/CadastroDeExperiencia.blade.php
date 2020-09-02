@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroDeExperiencia.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Experiência
@endsection

@section('conteudo')
    
<div class="container">
    <div class="body-header">
    @if(isset($resultado))
      @if($resultado)

    <br>

    <div style="text-align:center; background-color:#cef2f0;">
      <h3>Experiência Cadastrada com Sucesso!</h3>
    </div>

    <br>
  @else
      
    <br>

    <div style="text-align:center; background-color:red">
      <h3>Erro ao cadastrar experiência</h3>
    </div>

    <br>
  @endif
@endif 

        <h1 class="title" style="text-align:center;">Cadastro de Experiencia</h1>
        <br>
        <br>
        <p class="subtitle">Preencha o formulário para cadastrar uma experiência nova do seu restaurante!</a>.</p>
    </div>
    <br>
    <hr>
    <br>

    <form action="/CadastroDeExperiencia" class="formulario" method="POST" enctype="multipart/form-data">

      @csrf

        <div>
        <label class="label" for="nomeExperiencia">Nome da Experiência</label>
            <input class="input form-control" type="text" name="nomeExperiencia" id="nomeExperiencia" placeholder="Nome que será o título exibido aos usuários">
        </div>

        <hr>

        <div>
        <label class="label" for="precoExperiencia">Preço</label>
            <input class="input form-control" type="text" name="precoExperiencia" id="precoExperiencia" placeholder="Valor que será cobrado por essa experiência">
        </div>

        <hr>

        <div>
        <label class="label" for="quantidadePessoasExperiencia">Quantidade Máxima de Pessoas</label>
            <input class="input form-control" type="text" name="quantidadePessoasExperiencia" id="quantidadePessoasExperiencia">
        </div>

        <hr>

        <div>
        <label class="label" for="descricaoExperiencia">Descrição</label>
          <input class="input form-control" type="text" name="descricaoExperiencia" id="descricaoExperiencia" placeholder="Faça uma breve descrição do que sua experiência irá proporcionar">
        </div>

        <hr>

        <div>
        <label class="label" for="fotoExperiencia">Fotos da Experiência</label>
            <input class="input form-control" type="file" name="fotoExperiencia" id="fotoExperiencia">
        </div>

        <hr>

        <div>

        <label>Dias da Semana disponíveis para essa experiências</label><br><br>
        <input type="checkbox" name="Segunda" id="Segunda" value="segunda">
          <label class="label" for="Segunda">Segunda-Feira</label><br>

        <input type="checkbox" name="Terca" id="Terca" value="terça">
          <label class="label" for="Terca">Terça-Feira</label><br>

        <input type="checkbox" name="Quarta" id="Quarta" value="quarta">
          <label class="label" for="Quarta">Quarta-Feira</label><br>

        <input type="checkbox" name="Quinta" id="Quinta" value="quinta">
          <label class="label" for="Quinta">Quinta-Feira</label><br>

        <input type="checkbox" name="Sexta" id="Sexta" value="sexta">
          <label class="label" for="Sexta">Sexta-Feira</label><br>

        <input type="checkbox" name="Sabado" id="Sabado" value="sabado">
          <label class="label" for="Sabado">Sábado-Feira</label><br>

        <input type="checkbox" name="Domingo" id="Domingo" value="domingo">    
          <label class="label" for="Domingo">Domingo-Feira</label><br>
        </div>

        <hr>

        <div>
        <label class="label" for="tipoExperiencia">Tipo de Experiência</label><br><br>

        <input type="radio" name="tipo" id="externa" value="externa">
          <label class="label" for="externa">Você vai até o usuário</label><br>

        <input type="radio" name="tipo" id="interna" value="interna">    
          <label class="label" for="interna">O usuário vai até você</label><br>
        </div>

        <hr>

        <label>Escolha 5 tags que melhor definem a sua experiência</label><br><br>

        <div class="row">
          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Para Família</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Vegetariano</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Vegano</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Gluten-Free</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Bebidas Acoólicas</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Culinária Estrangeira</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Aceita grandes grupos de pessoas</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Chef Estrangeiro</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Online</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Romântica</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Aula Especializada</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Gourmet</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Serviço de Chofer disponível</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Área de Fumantes</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Baking Goods</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Confeitaria</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Doces</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Salgados</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Comida Típica Brasileira</label><br>
          </div>

          <div class="col-lg-3">
            <input type="radio" name="tipo" id="interna" value="interna">    
              <label class="label" for="interna">Alto Padrão</label><br>
          </div>
        </div>

        <hr>
    <input type="submit" class="btn btn-info" value="Cadastrar">
    <br>
    <br>
</div>

@endsection
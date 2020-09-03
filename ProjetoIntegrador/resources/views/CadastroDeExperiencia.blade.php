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
            <input class="input form-control" type="number" name="precoExperiencia" id="precoExperiencia" placeholder="Valor que será cobrado por essa experiência">
        </div>

        <hr>

        <div>
        <label class="label" for="quantidadePessoasExperiencia">Quantidade Máxima de Pessoas</label>
            <input class="input form-control" type="number" name="quantidadePessoasExperiencia" id="quantidadePessoasExperiencia">
        </div>

        <hr>

        <div>
        <label class="label" for="sobreExperiencia">Sobre a Experiência</label>
          <input class="input form-control" type="text" name="sobreExperiencia" id="sobreExperiencia" placeholder="Faça uma descrição detalhada do que a experiência irá proporcionar">
        </div>

        <hr>

        <div>
        <label class="label" for="descricaoExperiencia">Descrição</label>
          <input class="input form-control" type="text" name="descricaoExperiencia" id="descricaoExperiencia" placeholder="Faça uma breve descrição do que a experiência irá proporcionar">
        </div>

        <hr>

        <div>

          <label for="funcionamento">Dias da Semana disponíveis para essa experiências</label><br><br>
          <input type="text" name="funcionamento" class="form-control">
            
        </div>        
          
        <hr>  

        <div>

          <label for="sobreRestaurante">Sobre o restaurante</label><br><br>
          <input type="text" name="sobreRestaurante" class="form-control" placeholder="Faça uma descrição detalhada sobre o restaurante">
  
        </div>    

        <hr>  

        <div>
        <label class="label" for="fotoExperiencia">Fotos da Experiência(Carrosel)</label>
            <input class="input form-control" type="file" name="fotoExperiencia" id="fotoExperiencia">
        </div>

        <hr>

        <div>
        <label class="label" for="logoRestaurante">Logo do Restaurante</label>
            <input class="input form-control" type="file" name="logoRestaurante" id="logoRestaurante">
        </div>

        <hr>

        <label>Escolha 5 tags que melhor definem essa experiência</label><br><br>

        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="familia" id="familia" value="familia">    
              <label class="label" for="familia">Para Família</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="vegetariano" id="vegetariano" value="vegetariano">    
              <label class="label" for="vegetariano">Vegetariano</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="vegano" id="vegano" value="vegano">    
              <label class="label" for="vegano">Vegano</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="semGluten" id="semGluten" value="semGluten">    
              <label class="label" for="semGluten">Gluten-Free</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="bebidasAlcoolicas" id="bebidasAlcoolicas" value="bebidasAlcoolicas">    
              <label class="label" for="bebidasAlcoolicas">Bebidas Acoólicas</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="culinariaEstrangeira" id="culinariaEstrangeira" value="culinariaEstrangeira">    
              <label class="label" for="culinariaEstrangeira">Culinária Estrangeira</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="grandesGrupos" id="grandesGrupos" value="grandesGrupos">    
              <label class="label" for="grandesGrupos">Aceita grandes grupos de pessoas</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="chefEstrangeiro" id="chefEstrangeiro" value="chefEstrangeiro">    
              <label class="label" for="chefEstrangeiro">Chef Estrangeiro</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="online" id="online" value="online">    
              <label class="label" for="online">Online</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="romantica" id="romantica" value="romantica">    
              <label class="label" for="romantica">Romântica</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="aulaEspecializada" id="aulaEspecializada" value="aulaEspecializada">    
              <label class="label" for="aulaEspecializada">Aula Especializada</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="gourmet" id="gourmet" value="gourmet">    
              <label class="label" for="gourmet">Gourmet</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="chofer" id="chofer" value="chofer">    
              <label class="label" for="chofer">Serviço de Chofer disponível</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="areaFumantes" id="areaFumantes" value="areaFumantes">    
              <label class="label" for="areaFumantes">Área de Fumantes</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="bakedGoods" id="bakedGoods" value="bakedGoods">    
              <label class="label" for="bakedGoods">Baking Goods</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="confeitaria" id="confeitaria" value="confeitaria">    
              <label class="label" for="confeitaria">Confeitaria</label><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <input type="checkbox" name="doces" id="doces" value="doces">    
              <label class="label" for="doces">Doces</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="salgados" id="salgados" value="salgados">    
              <label class="label" for="salgados">Salgados</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="comidaBrasileira" id="comidaBrasileira" value="comidaBrasileira">    
              <label class="label" for="comidaBrasileira">Comida Típica Brasileira</label><br>
          </div>

          <div class="col-lg-3">
            <input type="checkbox" name="altoPadrao" id="altoPadrao" value="altoPadrao">    
              <label class="label" for="altoPadrao">Alto Padrão</label><br>
          </div>
        </div>

        <hr>
    <input type="submit" class="btn btn-info" value="Cadastrar">
    <br>
    <br>
</div>

@endsection
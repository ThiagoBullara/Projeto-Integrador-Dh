@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroDeExperiencia.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Experiência
@endsection

@section('conteudo')
  <main class="meio">
    <div class="container">
      <form class="formulario" class="needs-validation" novalidate>        
      <div>
        <h1 class="titulo">Cadastro de Experiência</h1><br>
      </div> 
      <p>Preencha o formulário para se cadastrar uma experiência no n!
      <div class="form-row" >
          <div class="col-lg-12">
              <div class="form-group"> 
                  <label for="experiencia">Experiência</label>
                  <input type="text" class="form-control form-control-lg" id="experiencia" placeholder="Jantar ao ar livre" name="experiencia" required>
                  <div class="valid-feedback">Valido.</div>
                  <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group"> 
                <label for="localizacao">Localização</label>
                <input type="text" class="form-control form-control-lg" id="localizacao" placeholder="av paulista 234 jardins" name="localizacao" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
          </div>  

          <div class="col-lg-12">
            <div class="form-group"> 
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control form-control-lg" id="tel" placeholder="+55 (11) 995555555" name="telefone" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
          </div>
            
          <div class="col-lg-12">
            <div class="form-group"> 
                <label for="localizacao">Descrição</label><br>
                <textarea name="descricao" id="descricao" cols="151" rows="5"></textarea>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
          </div>  
          
          <div class="col-lg-12">
            <div class="form-group"> 
                <label for="numero">Numero de pessoas</label>
                <input type="number" class="form-control form-control-lg" id="numero" placeholder="4" name="numero"required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
          </div>          
          
          <div class="col-lg-12">
            <div class="form-group"> 
                <label for="localizacao">Imagem da experiência</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
          </div>              

          <input type="submit" class="btn-buyhood" value="Cadastrar">
        </form>
    </div>
  </main>
@endsection


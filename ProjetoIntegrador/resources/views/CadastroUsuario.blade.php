@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroUsuario.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro Usuário
@endsection

@section('conteudo')
    <main class="meio">
      <div class="container">
        <form class="formulario" class="needs-validation" novalidate>        
        <div>
          <h1 class="titulo">Cadastro de Usuário</h1><br>
        </div> 
        <p>Preencha o formulário para se cadastrar como usuário no nosso site! Ou se sua intenção era cadastrar seu restaurante, clique <a href="/CadastroDeParceiro">aqui</a>.</p>
        <div class="form-row" >
            <div class="col">
                <div class="form-group"> 
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control form-control-lg" id="nome" placeholder="Nome" name="nome" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor preencha este campo.</div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control form-control-lg" id="sobrenome" placeholder="Sobrenome" name="sobrenome" required>
                    <div class="valid-feedback">Valido.</div>
                    <div class="invalid-feedback">Por favor preencha este campo.</div>
                </div>
            </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" placeholder="name@email.com" name="email" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            <div class="form-group">
              <label for="tel">Telefone</label>
              <input type="tel" class="form-control form-control-lg" id="tel" placeholder="Seu numero de telefone" name="tel" required>
              <div class="valid-feedback">Valido.</div>
              <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            
            <div class="form-group">
                <label for="pwd">Senha</label>
                <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Senha" name="pswd" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Porfavor preencha este campo.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Confirme sua senha</label>
                <input type="password" class="form-control form-control-lg" id="pwd" placeholder="Senha" name="pswd" required>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
            </div>
            
            <div class="form-group">
                <label for="genero">Gênero</label>
                <select name="genero" id="genero" class="form-control form-control-lg" required>
                    <option selected disabled>selecione seu gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                    <option value="naoinformar">Prefiro não informar</option>
                </select>
            </div> 
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" required> Eu li e concordo com os <a href="/TermosDeUso">Termos de Uso</a> e com a <a href="/PoliticaDePrivacidade">Política de Privacidade</a>
                <div class="valid-feedback">Valido.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
              </label>
            </div>
            <button type="submit" class="btn-buyhood" class="enviar">Enviar</button>
          </form>
      </div>
    </main>
@endsection


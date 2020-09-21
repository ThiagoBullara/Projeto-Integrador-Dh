@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroEdicaoDeExperiencia.css')}}">
@endsection

@section('titulo')
	BuyHood - Cadastro De Experiência
@endsection

@section('conteudo')
    
<div class="container">
    @if(isset($resultado))
        @if($resultado)
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 sucesso  mt-4 pb-4 pt-4">
                    <h3>Experiência cadastrada com sucesso! <span class="sucesso-icon">&#10004;</span></h3>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 erro  mt-4 pb-4 pt-4">
                    <h3>Erro ao cadastrar a experiência <span class="erro-icon">&#10006;</span></h3>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @endif
    @endif
     
    @if($errors -> any())
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 erro  mt-4 pb-4 pt-4">
                <h3>Erro ao cadastrar a experiência <span class="erro-icon">&#10006;</span></h3>
            </div>
            <div class="col-lg-3"></div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <h1 class="pb-5 pt-5">Cadastro de Experiência</h1>
        </div>
    </div>
    <form action="/CadastroDeExperiencia" method="POST" enctype="multipart/form-data">
        @csrf
        
        <h2 class="mb-4">Preencha todos os campos para cadastrar sua experiência!</h2>
        
        <hr>
        
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="nomeExperiencia">Nome da experiência <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="text" name="nomeExperiencia" id="nomeExperiencia" placeholder="Exemplo: Jantar vegetariano" value="{{old('nomeExperiencia')}}" required>
                @error('nomeExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-3">
                <label for="precoExperiencia">Preço <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="precoExperiencia" id="precoExperiencia" placeholder="R$: 29.99" min="0" value="{{old('precoExperiencia')}}" required>
                @error('precoExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-3">
                <label for="quantidadePessoasExperiencia">Quantidade máxima de pessoas <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="quantidadePessoasExperiencia" id="quantidadePessoasExperiencia" placeholder="4" min="1" max="10" value="{{old('quantidadePessoasExperiencia')}}" required>
                @error('quantidadePessoasExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="descricaoExperiencia">Descrição <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="descricaoExperiencia" id="descricaoExperiencia" placeholder="Descubra uma nova forma de ser vegetariano" required>{{old('descricaoExperiencia')}}</textarea>
                @error('descricaoExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="sobreExperiencia">Sobre a Experiência <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="sobreExperiencia" id="sobreExperiencia" placeholder="Essa experiência é perfeita para duas pessoas que gostam de animais, nela será servida apenas planta e terra já que é uma experiência vegetariana é isso que lhe aguarda" required>{{old('sobreExperiencia')}}</textarea>
                @error('sobreExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>      
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="sobreRestaurante">Sobre o restaurante <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" type="text" name="sobreRestaurante" class="form-control" placeholder="O restaurante foi fundado em 1970 na época em que ser vegetariano era estranho então ele quase faliu algumas vezes" required>{{old('sobreRestaurante')}}</textarea>
                @error('sobreRestaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="funcionamento">Dias da Semana disponíveis para essa experiências <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="3" type="text" name="funcionamento" class="form-control" placeholder="Experência válida de segunda a quinta das 13:00 às 19:00" required>{{old('funcionamento')}}</textarea>
                @error('funcionamento')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia1">Fotos da Experiência - Carrosel 1 <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia1" id="fotoExperiencia1" required>
                @error('fotoExperiencia1')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="fotoExperiencia2">Fotos da Experiência - Carrosel 2 <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia2" id="fotoExperiencia2" required>      
                @error('fotoExperiencia2')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4 pb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia3">Fotos da Experiência - Carrosel 3 <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia3" id="fotoExperiencia3" required>
                @error('fotoExperiencia3')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>        
            <div class="col-lg-6">
                <label for="logoRestaurante">Logo do Restaurante <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="logoRestaurante" id="logoRestaurante" required>
                @error('logoRestaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label for="endereco">Endereço da Experiência <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="text" name="endereco" id="endereco" required>
                @error('endereco')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="video">Vídeo de Referência <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="text" name="video" id="video" required>
                @error('video')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        
        <hr>

        <h3 class="mt-4 mb-4">Escolha até 4 tags que melhor definem essa experiência!</h3>

        <div class="row">
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 1° tag</label>
                <select class="form-control" id="tag1" name="tag1" required>
                    <option selected disabled>Selecione uma tag</option>
                    <option value="Culinária Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Culinária Árabe">Árabe</option>
                    <option value="Culinária Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas e Pratos Quentes">Massas</option>
                    <option value="Culinária Japonêsa">Japonêsa</option>
                    <option value="Nacional">Nacional</option>
                    <option value="Frangos e Aves">Aves</option>
                    <option value="Confeitaria">Confeitaria</option>
                    <option value="Doces e Sobremesas">Doces</option>
                    <option value="Artesanal">Artesanal</option>
                    <option value="Gastrônomia Exótica">Exóticas</option>
                    <option value="Culinária Chinesa">Chinesa</option>
                    <option value="Comida saudável e Fitness">Comida saudável e Fitness</option>
                    <option value="Curso com certificação">Curso com certificação</option>
                    <option value="Bebidas Alcoólicas">Bebidas</option>
                    <option value="Padaria e Assados">Padaria e Assados</option>
                    <option value="Gastronômia Renomada">Renomada</option>
                    <option value="Pratos Estrangeiros em Geral">Prato estrangeiro</option>
                    <option value="Gastronômia Gourmet">Gourmet</option>              
                </select>
                @error('tag1')
                    <p style="color: red;">{{$message}}</p>
                 @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 2° tag</label>
                <select class="form-control" id="tag2" name="tag2" required>
                    <option selected disabled>Selecione uma tag</option>
                    <option value="Culinária Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Culinária Árabe">Árabe</option>
                    <option value="Culinária Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas e Pratos Quentes">Massas</option>
                    <option value="CulináriaJaponêsa">Japonêsa</option>
                    <option value="Comida Típica Brasileira">Nacional</option>
                    <option value="Frangos e Aves">Aves</option>
                    <option value="Confeitaria">Confeitaria</option>
                    <option value="Doces e Sobremesas">Doces</option>
                    <option value="Artesanal">Artesanal</option>
                    <option value="Gastrônomia Exótica">Exóticas</option>
                    <option value="Culinária Chinesa">Chinesa</option>
                    <option value="Comida saudável e Fitness">Comida saudável e Fitness</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas Alcoólicas">Bebidas</option>
                    <option value="Padaria e Assados">Padaria e Assados</option>
                    <option value="Gastronômia Renomada">Renomada</option>
                    <option value="Pratos Estrangeiros em Geral">Prato estrangeiro</option>
                    <option value="Gastronômia Gourmet">Gourmet</option>              
                </select>
                @error('tag2')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 3° tag</label>
                <select class="form-control" id="tag3" name="tag3" required>
                    <option selected disabled>Selecione uma tag</option>
                    <option value="Culinária Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Culinária Árabe">Árabe</option>
                    <option value="Culinária Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas e Pratos Quentes">Massas</option>
                    <option value="CulináriaJaponêsa">Japonêsa</option>
                    <option value="Comida Típica Brasileira">Nacional</option>
                    <option value="Frangos e Aves">Aves</option>
                    <option value="Confeitaria">Confeitaria</option>
                    <option value="Doces e Sobremesas">Doces</option>
                    <option value="Artesanal">Artesanal</option>
                    <option value="Gastrônomia Exótica">Exóticas</option>
                    <option value="Culinária Chinesa">Chinesa</option>
                    <option value="Comida saudável e Fitness">Comida saudável e Fitness</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas Alcoólicas">Bebidas</option>
                    <option value="Padaria e Assados">Padaria e Assados</option>
                    <option value="Gastronômia Renomada">Renomada</option>
                    <option value="Pratos Estrangeiros em Geral">Prato estrangeiro</option>
                    <option value="Gastronômia Gourmet">Gourmet</option>              
                </select>
                @error('tag3')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 4° tag</label>
                <select class="form-control" id="tag4" name="tag4" required>
                    <option selected disabled>Selecione uma tag</option>
                    <option value="Culinária Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Culinária Árabe">Árabe</option>
                    <option value="Culinária Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas e Pratos Quentes">Massas</option>
                    <option value="CulináriaJaponêsa">Japonêsa</option>
                    <option value="Comida Típica Brasileira">Nacional</option>
                    <option value="Frangos e Aves">Aves</option>
                    <option value="Confeitaria">Confeitaria</option>
                    <option value="Doces e Sobremesas">Doces</option>
                    <option value="Artesanal">Artesanal</option>
                    <option value="Gastrônomia Exótica">Exóticas</option>
                    <option value="Culinária Chinesa">Chinesa</option>
                    <option value="Comida saudável e Fitness">Comida saudável e Fitness</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas Alcoólicas">Bebidas</option>
                    <option value="Padaria e Assados">Padaria e Assados</option>
                    <option value="Gastronômia Renomada">Renomada</option>
                    <option value="Pratos Estrangeiros em Geral">Prato estrangeiro</option>
                    <option value="Gastronômia Gourmet">Gourmet</option>              
                </select>
                @error('tag4')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn-buyhood">Cadastrar!</button>
        
        <hr>

    </form>
</div>

@endsection
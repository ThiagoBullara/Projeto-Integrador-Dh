@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/CadastroEdicaoDeExperiencia.css')}}">
@endsection

@section('titulo')
    BuyHood - Edição De Experiência
@endsection

@section('conteudo')
    
<div class="container">
    @if(isset($resultado))
        @if($resultado)
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 sucesso  mt-4 pb-4 pt-4">
                    <h3>Experiência editada com sucesso! <span class="sucesso-icon">&#10004;</span></h3>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 erro  mt-4 pb-4 pt-4">
                    <h3>Erro ao editar a experiência <span class="erro-icon">&#10006;</span></h3>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @endif
    @endif
     
    @if($errors -> any())
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 erro  mt-4 pb-4 pt-4">
                <h3>Erro ao editar a experiência <span class="erro-icon">&#10006;</span></h3>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <h1 class="pb-5 pt-5">Edição de Experiência</h1>
        </div>
    </div>
    <form action="/EditarExperiencia/{{$editarExperiencia->id_experiencia}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <h2 class="mb-4">Preencha todos os campos para editar sua experiência!</h2>
        
        <hr>
        
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="nomeExperiencia">Nome da experiência <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="text" name="nomeExperiencia" id="nomeExperiencia" placeholder="{{ $editarExperiencia -> nomeExperiencia }}" value="{{old('nomeExperiencia')}}">
            </div>
            <div class="col-lg-3">
                <label for="precoExperiencia">Preço <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="precoExperiencia" id="precoExperiencia" placeholder="{{ $editarExperiencia -> precoExperiencia }}" min="0" value="{{old('precoExperiencia')}}">
            </div>
            <div class="col-lg-3">
                <label for="quantidadePessoasExperiencia">Quantidade máxima de pessoas <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="quantidadePessoasExperiencia" id="{{ $editarExperiencia -> quantidadePessoasExperiencia }}" placeholder="4" min="1" max="10" value="{{old('quantidadePessoasExperiencia')}}">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="descricaoExperiencia">Descrição <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="descricaoExperiencia" id="descricaoExperiencia" placeholder="{{ $editarExperiencia -> descricaoExperiencia }}">{{old('descricaoExperiencia')}}</textarea>
            </div>
            <div class="col-lg-6">
                <label for="sobreExperiencia">Sobre a Experiência <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="sobreExperiencia" id="sobreExperiencia" placeholder="{{ $editarExperiencia -> sobreExperiencia }}">{{old('sobreExperiencia')}}</textarea>
            </div>      
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="sobreRestaurante">Sobre o restaurante <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" type="text" name="sobreRestaurante" class="form-control" placeholder="{{ $editarExperiencia -> sobreRestaurante }}">{{old('sobreRestaurante')}}</textarea>
            </div>
            <div class="col-lg-6">
                <label for="funcionamento">Dias da Semana disponíveis para essa experiências <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="3" type="text" name="funcionamento" class="form-control" placeholder="{{ $editarExperiencia -> funcionamento }}">{{old('funcionamento')}}</textarea>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia1">Fotos da Experiência - Carrosel 1 - Lista de experiência <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia1" id="fotoExperiencia1">
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia1 }}" alt="{{ $editarExperiencia->fotoExperiencia1 }}">            </div>
            <div class="col-lg-6">
                <label for="fotoExperiencia2">Fotos da Experiência - Carrosel 2 <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia2" id="fotoExperiencia2">
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia2 }}" alt="{{ $editarExperiencia->fotoExperiencia2 }}">      
            </div>
        </div>
        <div class="row mb-4 pb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia3">Fotos da Experiência - Carrosel 3 <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="fotoExperiencia3" id="fotoExperiencia3">
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia3 }}" alt="{{ $editarExperiencia->fotoExperiencia3 }}">
            </div>        
            <div class="col-lg-6">
                <label for="logoRestaurante">Logo do Restaurante <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control-file" type="file" name="logoRestaurante" id="logoRestaurante">
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->logoRestaurante }}" alt="{{ $editarExperiencia->logoRestaurante }}">

            </div>
        </div>
        
        <hr>

        <h3 class="mt-4 mb-4">Escolha novas tags para sua experiência!</h3>

        <div class="row">
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 1° tag</label>
                <select class="form-control" id="tag1" name="tag1">
                    <option selected>{{ $editarExperiencia -> tag1 }}</option>
                    <option value="Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Árabe">Árabe</option>
                    <option value="Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas">Massas</option>
                    <option value="Japonêsa">Japonêsa</option>
                    <option value="Nacional">Nacional</option>
                    <option value="Aves">Aves</option>
                    <option value="Alemã">Alemã</option>
                    <option value="Doces">Doces</option>
                    <option value="Chilena">Chilena</option>
                    <option value="Exóticas">Exóticas</option>
                    <option value="Chinesa">Chinesa</option>
                    <option value="Britânica">Britânica</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Salgadas">Salgadas</option>
                    <option value="Renomada">Renomada</option>
                    <option value="Prato estrangeiro">Prato estrangeiro</option>
                    <option value="Gourmet">Gourmet</option>              
                </select>
            </div>
            <div class="form-group col-lg-3">
                <label for="tag2">Selecione a 2° tag</label>
                <select class="form-control" id="tag2" name="tag2">
                    <option selected>{{ $editarExperiencia -> tag2 }}</option>
                    <option value="Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Árabe">Árabe</option>
                    <option value="Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas">Massas</option>
                    <option value="Japonêsa">Japonêsa</option>
                    <option value="Nacional">Nacional</option>
                    <option value="Aves">Aves</option>
                    <option value="Alemã">Alemã</option>
                    <option value="Doces">Doces</option>
                    <option value="Chilena">Chilena</option>
                    <option value="Exóticas">Exóticas</option>
                    <option value="Chinesa">Chinesa</option>
                    <option value="Britânica">Britânica</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Salgadas">Salgadas</option>
                    <option value="Renomada">Renomada</option>
                    <option value="Prato estrangeiro">Prato estrangeiro</option>
                    <option value="Gourmet">Gourmet</option>              
                </select>
            </div>
            <div class="form-group col-lg-3">
                <label for="tag3">Selecione a 3° tag</label>
                <select class="form-control" id="tag3" name="tag3">
                    <option selected>{{ $editarExperiencia -> tag3 }}</option>
                    <option value="Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Árabe">Árabe</option>
                    <option value="Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas">Massas</option>
                    <option value="Japonêsa">Japonêsa</option>
                    <option value="Nacional">Nacional</option>
                    <option value="Aves">Aves</option>
                    <option value="Alemã">Alemã</option>
                    <option value="Doces">Doces</option>
                    <option value="Chilena">Chilena</option>
                    <option value="Exóticas">Exóticas</option>
                    <option value="Chinesa">Chinesa</option>
                    <option value="Britânica">Britânica</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Salgadas">Salgadas</option>
                    <option value="Renomada">Renomada</option>
                    <option value="Prato estrangeiro">Prato estrangeiro</option>
                    <option value="Gourmet">Gourmet</option>              
                </select>
            </div>
            <div class="form-group col-lg-3">
                <label for="tag4">Selecione a 4° tag</label>
                <select class="form-control" id="tag4" name="tag4">
                    <option selected>{{ $editarExperiencia -> tag4 }}</option>
                    <option value="Mexicana">Mexicana</option>
                    <option value="Vegetariana">Vegetariana</option>
                    <option value="Árabe">Árabe</option>
                    <option value="Francesa">Francesa</option>
                    <option value="Frutos do mar">Frutos do mar</option>
                    <option value="Massas">Massas</option>
                    <option value="Japonêsa">Japonêsa</option>
                    <option value="Nacional">Nacional</option>
                    <option value="Aves">Aves</option>
                    <option value="Alemã">Alemã</option>
                    <option value="Doces">Doces</option>
                    <option value="Chilena">Chilena</option>
                    <option value="Exóticas">Exóticas</option>
                    <option value="Chinesa">Chinesa</option>
                    <option value="Britânica">Britânica</option>
                    <option value="Carnes">Carnes</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Salgadas">Salgadas</option>
                    <option value="Renomada">Renomada</option>
                    <option value="Prato estrangeiro">Prato estrangeiro</option>
                    <option value="Gourmet">Gourmet</option>              
                </select>
            </div>
        
        </div>

        <button type="submit" class="btn-buyhood">Editar!</button>
        
        <hr>

    </form>
</div>

@endsection
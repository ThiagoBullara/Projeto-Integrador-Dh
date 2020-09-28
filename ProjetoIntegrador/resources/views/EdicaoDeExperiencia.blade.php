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
                <div class="col-lg-6 sucesso  mt-4 pt-4">
                    <h3>Experiência editada com sucesso! <span class="sucesso-icon">&#10004;</span></h3>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @else
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 erro  mt-4 pt-4">
                    <h3>Erro ao editar a experiência <span class="erro-icon">&#10006;</span></h3>
                    <p class="erro-campo-obrigatorio">Os campos com <span class="campo-obrigatorio">*</span> são obrigatórios</p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @endif
    @endif
     
    @if($errors -> any())
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 erro  mt-4 pt-4">
                <h3>Erro ao editar a experiência <span class="erro-icon">&#10006;</span></h3>
                <p class="erro-campo-obrigatorio">Os campos com <span class="campo-obrigatorio">*</span> são obrigatórios</p>
            </div>
            <div class="col-lg-3"></div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <h1 class="pb-5 pt-5">Edição de Experiência</h1>
        </div>
    </div>
    <form action="/EditarExperiencia/{id}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id_experiencia" value="{{ $editarExperiencia->id_experiencia }}">
        
        <h2 class="mb-4">Preencha todos os campos para editar sua experiência!</h2>
        
        <hr>
        
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="nomeExperiencia">Nome da experiência <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="text" name="nomeExperiencia" id="nomeExperiencia" placeholder="{{ $editarExperiencia -> nomeExperiencia}}" value="{{old('nomeExperiencia')}}" required>
                @error('nomeExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-3">
                <label for="precoExperiencia">Preço <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="precoExperiencia" id="precoExperiencia" placeholder="{{ $editarExperiencia -> precoExperiencia}}" min="0" value="{{old('precoExperiencia')}}" required>
                @error('precoExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-3">
                <label for="quantidadePessoasExperiencia">Quantidade máxima de pessoas <span class="campo-obrigatorio">*</span></label>
                <input class="form-control" type="number" name="quantidadePessoasExperiencia" id="quantidadePessoasExperiencia" placeholder="{{ $editarExperiencia -> quantidadePessoasExperiencia}}" min="1" max="10" value="{{old('quantidadePessoasExperiencia')}}" required>
                @error('quantidadePessoasExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="descricaoExperiencia">Descrição <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="descricaoExperiencia" id="descricaoExperiencia" placeholder="{{ $editarExperiencia -> descricaoExperiencia}}" required>{{old('descricaoExperiencia')}}</textarea>
                @error('descricaoExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="sobreExperiencia">Sobre a Experiência <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" class="form-control" type="text" name="sobreExperiencia" id="sobreExperiencia" placeholder="{{ $editarExperiencia -> sobreExperiencia}}" required>{{old('sobreExperiencia')}}</textarea>
                @error('sobreExperiencia')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>      
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="sobreRestaurante">Sobre o restaurante <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="5" type="text" name="sobreRestaurante" class="form-control" id="sobreRestaurante" placeholder="{{ $editarExperiencia -> sobreRestaurante}}" required>{{old('sobreRestaurante')}}</textarea>
                @error('sobreRestaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="funcionamento">Dias da Semana disponíveis para essa experiências <span class="campo-obrigatorio">*</span></label><br>
                <textarea rows="3" type="text" name="funcionamento" class="form-control" id="funcionamento" placeholder="{{ $editarExperiencia -> funcionamento}}" required>{{old('funcionamento')}}</textarea>
                @error('funcionamento')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <label for="endereco">Endereço da Experiência <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control" type="text" name="endereco" id="endereco" placeholder="{{ $editarExperiencia -> endereco}}" required>
                @error('endereco')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="video">Vídeo de Referência <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control" type="text" name="video" id="video" value="{{ $editarExperiencia -> video}}" required>
                @error('video')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="email_restaurante">Email do restaurante <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control" type="email" name="email_restaurante" id="email_restaurante" placeholder="{{ $editarExperiencia -> email_restaurante}}" required>
                @error('email_restaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-lg-6">
                <label for="nomeRestaurante">Nome do Restaurante <span class="campo-obrigatorio">*</span></label><br>
                <input class="form-control" type="text" name="nomeRestaurante" id="nomeRestaurante" placeholder="{{ $editarExperiencia -> nomeRestaurante}}" value="{{old('nomeRestaurante')}}" required>
                @error('nomeRestaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia1">Foto 1 <span class="campo-obrigatorio">*</span></label><br>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="fotoExperiencia1">Fotos da Experiência - Carrosel 1</label>
                        <input type="file" class="custom-file-input" name="fotoExperiencia1" id="fotoExperiencia1" required>
                    </div>
                </div>
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia1 }}" alt="{{ $editarExperiencia->fotoExperiencia1 }}">
                @error('fotoExperiencia1')
                    <p style="color: red;">{{$message}}</p>
                @enderror                
            </div>
            <div class="col-lg-6">
                <label for="fotoExperiencia2">Foto 2 <span class="campo-obrigatorio">*</span></label><br>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="fotoExperiencia2">Fotos da Experiência - Carrosel 2</label>
                        <input type="file" class="custom-file-input" name="fotoExperiencia2" id="fotoExperiencia2" required>
                    </div>
                </div>   
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia2 }}" alt="{{ $editarExperiencia->fotoExperiencia2 }}">
                @error('fotoExperiencia2')
                    <p style="color: red;">{{$message}}</p>
                @enderror             
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-6">
                <label for="fotoExperiencia3">Foto 3 <span class="campo-obrigatorio">*</span></label><br>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="fotoExperiencia3">Fotos da Experiência - Carrosel 3</label>
                        <input type="file" class="custom-file-input" name="fotoExperiencia3" id="fotoExperiencia3" required>
                    </div>
                </div>    
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->fotoExperiencia3 }}" alt="{{ $editarExperiencia->fotoExperiencia3 }}">
                @error('fotoExperiencia3')
                    <p style="color: red;">{{$message}}</p>
                @enderror            
            </div>
            <div class="col-lg-6">
                <label for="logoRestaurante">Logo restaurante <span class="campo-obrigatorio">*</span></label><br>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="logoRestaurante">Logo</label>
                        <input type="file" class="custom-file-input" name="logoRestaurante" id="logoRestaurante" required>
                    </div>
                </div>
                <h4 class="mt-3">Imagem atual:</h4>
                <img class="mt-3" style="border: 1px solid black;" width="200px" height="200px" src="{{ '/storage/img/'.$editarExperiencia->logoRestaurante }}" alt="{{ $editarExperiencia->logoRestaurante }}">
                @error('logoRestaurante')
                    <p style="color: red;">{{$message}}</p>
                @enderror                
            </div>
        </div>
        
        <hr>

        <h3 class="mt-4 mb-4">Escolha até 4 tags que melhor definem essa experiência!</h3>

        <div class="row">
            <div class="form-group col-lg-3">
                <label for="tag1">Selecione a 1° tag <span class="campo-obrigatorio">*</span></label>
                <select class="form-control" id="tag1" name="tag1" required>
                    <option selected>{{ $editarExperiencia -> tag1 }}</option>
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
                <label for="tag2">Selecione a 2° tag <span class="campo-obrigatorio">*</span></label>
                <select class="form-control" id="tag2" name="tag2" required>
                    <option selected>{{ $editarExperiencia -> tag2 }}</option>
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
                <label for="tag3">Selecione a 3° tag <span class="campo-obrigatorio">*</span></label>
                <select class="form-control" id="tag3" name="tag3" required>
                    <option selected>{{ $editarExperiencia -> tag3 }}</option>
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
                <label for="tag4">Selecione a 4° tag <span class="campo-obrigatorio">*</span></label>
                <select class="form-control" id="tag4" name="tag4" required>
                    <option selected>{{ $editarExperiencia -> tag4 }}</option>
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

        <div class="row mt-4 mb-4">
            <div class="col-lg-12 btn-buyhood-envio">
                <button type="submit" class="btn-buyhood">Editar!</button>
            </div>
        </div>
        
        <hr>

    </form>
</div>

@endsection
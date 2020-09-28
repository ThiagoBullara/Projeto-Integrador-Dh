@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDePerfil.css')}}">
@endsection

@section('titulo')
	BuyHood - Perfil
@endsection

@section('conteudo')

    <div class="container mt-4 mb-4">
        @if(isset($resultado))
            @if($resultado)
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 sucesso  mt-4 pt-4">
                        <h3>Feedback enviado com sucesso! <span class="sucesso-icon">&#10004;</span></h3>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6 erro  mt-4 pt-4">
                        <h3>Erro ao enviar feedback <span class="erro-icon">&#10006;</span></h3>
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
                    <h3>Erro ao enviar feedback <span class="erro-icon">&#10006;</span></h3>
                    <p class="erro-campo-obrigatorio">Os campos com <span class="campo-obrigatorio">*</span> são obrigatórios</p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12 mt-4" >
                <h1>Perfil</h1>
            </div>
        </div>
        <div class="row">
            <div  class="col-lg-5 mt-5 mb-5">
                <img style="width:140px; height:140px;border-radius:50%;" src="{{'/storage/img/'.$detalhesPerfil->fotoPerfil }}" alt="{{ $detalhesPerfil->fotoPerfil }}" class="imagem-mobile">    
            </div>
            <div  class="col-lg-6 mt-5 mb-5">
                <h3>{{ $detalhesPerfil->name }}</h3>
                <p>Email: {{ $detalhesPerfil->email }}</p>
                <a href="/EditarPerfil/"><button class="btn btn-primary">Editar Perfil</button></a>
                <a href="/DeletarPerfil/"><button class="btn btn-danger" onclick="confirmacao()">Deletar Perfil</button></a>
                <script>
                    function confirmacao() {

                        var boolConfirmacao =  confirm("Você tem certeza que quer ativar essa experiência?");

                        if (!boolConfirmacao){
                            event.preventDefault();
                        }
                    }
                </script>
            </div>
        </div>

        <hr>

        <div>
            <h1>Suas Compras</h1>
        </div>
        <table>
            <thead>
                <tr>
                <th>
                    <h4>ID da Compra</h4>
                </th>
                <th>
                    <h4>Experiencia Comprada</h4>
                </th>
                <th>
                    <h4>Quantidade de Pessoas</h4>
                </th>
                <th>
                    <h4>Validade</h4>
                </th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($minhasCompras as $carrinho)
                    <tr>
                        <th>
                            <div>
                                <div>
                                <strong> #{{ $carrinho -> id_compra }} </strong>
                                </div>
                            </div>
                        </th>
                        <td style="text-align:center;">{{ $carrinho -> name }}</td>
                        <td style="text-align:center;"><strong> {{$carrinho -> quantidade_pessoas}} </strong></td>
                        <td style="text-align:center;"> 
                            @if($carrinho['usado'] == 0) 
                        <form action="/AtivarExperiencia" onsubmit="confirmacao()">
                            <script>
                                function confirmacao() {

                                    var boolConfirmacao =  confirm("Você tem certeza que quer deletar permanentemente essa experiência?");

                                    if (!boolConfirmacao){
                                        event.preventDefault();
                                    }
                                }
                            </script>
                            <input type="hidden" name="id_compra" value="{{ $carrinho -> id_compra }}">
                            <button type="submit" class="btn-buyhood">Mostrar QR Code</button>
                        </form>                         
                            @else
                            <p class="status">Já Usado</p>
                            @if($carrinho['avaliado'] == 0)
                                <a href="#" data-toggle="modal" data-target="#modalFeedback" >Clique aqui para avaliar sua experiência</a>
                                <div class="modal fade" id="modalFeedback">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1>Feedback experiência #{{ $carrinho -> id_compra }}</h1>
                                                <a href="#" data-dismiss="modal">X</a>
                                            </div>
                                            <form action="/Feedback" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_experiencia" value="{{ $carrinho -> id_experiencia }}">
                                                <input type="hidden" name="id_compra" value="{{ $carrinho -> id_compra }}">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <h3 class="mb-5">De 1 à 5 como você classifica sua experiência {{ $carrinho -> name }} para {{$carrinho -> quantidade_pessoas}} pessoas?</h3>
                                                    </div>
                                                    <div class="row mb-5">
                                                        <div class="col-lg-2">
                                                            <p>Péssima</p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="radio" id="1" name="rating" value="1" class="rating" checked>
                                                            <label for="1">1</label>
                                                            <input type="radio" id="2" name="rating" value="2" class="rating">
                                                            <label for="2">2</label>
                                                            <input type="radio" id="3" name="rating" value="3" class="rating">
                                                            <label for="3">3</label>
                                                            <input type="radio" id="4" name="rating" value="4" class="rating" required>
                                                            <label for="4">4</label>
                                                            <input type="radio" id="5" name="rating" value="5" class="rating">
                                                            <label for="5">5</label>
                                                                @error('sobreExperiencia')
                                                                    <p style="color: red;">{{$message}}</p>
                                                                @enderror
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <p>Ótima</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <h3>Conte-nos mais!</h3>
                                                    </div>
                                                    <div class="row">
                                                        <textarea id="feedback" name="feedback" rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <button type="submit" class="btn-buyhood mt-5">Enviar Feedback</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <p>Você já avaliou essa experiência,<br>obrigado pelo seu feedback</p>
                                @endif
                            @endif
                        </td>                                    
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>        
    </div>

@endsection
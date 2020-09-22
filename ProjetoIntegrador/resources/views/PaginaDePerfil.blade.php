@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaDePerfil.css')}}">
@endsection

@section('titulo')
	BuyHood - Perfil
@endsection

@section('conteudo')

    <div class="container mt-4 mb-4">
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
                <h4>Experiencia</h4>
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
                <td> 
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
                    Já usado 
                    @endif
                </td>                                    
            </tr>
        @endforeach
        </tbody>
        </table>
        <hr>

        <!-- <div class="listaCompras">
            <h3>Você ainda não realizou nenhuma compra</h3>
        </div> -->
        
    </div>
    
@endsection
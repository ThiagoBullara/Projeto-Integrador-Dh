@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/ListaDeRestaurantes.css')}}">
@endsection

@section('titulo')
	BuyHood - Restaurantes 
@endsection

@section('conteudo')
	<main>
		<div>
			<div class="banner">
				<img class ="banner-image" src="http://via.placeholder.com/1350x550" alt="">
			</div>
		</div> 
		<div class="container-fliud divisao">
			<div class="row">
				<div class="col">
					<h2>restaurantes parceiros</h2>
				</div>
			</div>
		</div>
		<div class="container produtos">
			<div class="row">
				@forelse($restaurantes as $restaurante)
					<div class="col-lg-4 col-md-6">
						<a href="/Restaurante/{{$restaurante -> nomeRestaurante}}/{{$restaurante -> id}}" class="link-restaurante">
							<div class="card-produtos">
								<div>
									<img src="https://via.placeholder.com/320x350" alt="Restaurante" class="imagem-mobile">
								</div>
								<div class="titulo-restaurante">
									<p>{{$restaurante -> nomeRestaurante}}</p>
								</div>
							</div>
						</a>
					</div>
                @empty
                    <p>Sem restaurantes</p>
                @endforelse

				<!-- Lembrar de usar paginate depois -->
				
			</div>			
		</div>
		<button class="button-search">Ver mais</button>
	</main>
@endsection
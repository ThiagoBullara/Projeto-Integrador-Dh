@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaSobreNos.css')}}">
@endsection

@section('titulo')
	BuyHood - Sobre nós 
@endsection

@section('conteudo')
    <div>
        <div class="banner">
            <img class ="banner-image" src="http://via.placeholder.com/1350x550" alt="">
        </div>
    </div> 
    <div class= "container-fluid meio" >
        <div class = "row verdeclaro" > 
            <div class= "conteudo1 col-lg-6" >
                <h1>Sobre nós</h1>
                <p>Somos a BuyHood, uma uma empresa jovem e brasileira, comprometida a trazer novas experiências gastrônomicas para nossos clientes.<br>
                Nascemos com o objetivo de facilitar o cotidiano de quem busca o diferente. Trazendo a gastronomia para mais perto das pessoas.<br>
                Viva novos momentos conosco.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius necessitatibus voluptas qui placeat 
                incidunt! Labore quos laudantium sed blanditiis voluptas ipsa, perspiciatis eligendi voluptates nihil explicabo rerum animi accusamus? Perferendis!</p>
            </div>

            <div class= "col-lg-6">
                <img class="imagem" src="https://via.placeholder.com/650x400" alt=" " >
            </div>
        </div>
    
        <div class = "row cinza">
            <div class= "col-lg-6">
                <img class="imagem"src="https://via.placeholder.com/650x500" alt=" " >
            </div>
            
            <div class= "conteudo2 col-lg-6">
                <h1>O que fazemos?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis corporis aspernatur laudantium? Nulla quasi veritatis 
                    delectus dolor quod? Dolores dolorum ipsam, consequatur soluta necessitatibus eaque quidem animi cumque architecto dolorem?<br>Lorem ipsum 
                    dolor sit amet consectetur adipisicing elit. Voluptate, architecto amet eum pariatur illo laboriosam distinctio, a repellendus quasi 
                    laborum maiores. Eligendi, ea qui! Pariatur voluptatibus perferendis dolorem amet officiis.</p>
            </div>
        </div>

        <div class = "row verde"> 
            <div class= "conteudo3 col-lg-6">
                <h1>O que faz de nós a difereça</h1>
                <p>Somos a BuyHood, uma uma empresa jovem e brasileira, comprometida a trazer novas experiências gastrônomicas para nossos clientes.<br>
                Nascemos com o objetivo de facilitar o cotidiano de quem busca o diferente. Trazendo a gastronomia para mais perto das pessoas.<br>
                Viva novos momentos conosco.<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque incidunt numquam saepe facere, voluptates 
                alias vitae aliquid amet praesentium in sint harum sed culpa ut perspiciatis maiores minima dolorum ullam.</p>
            </div>
            
            <div class= "col-lg-6">
                <img class="imagem" src="https://via.placeholder.com/650x450" alt=" " >
            </div>
        </div>

        <div class = "row tripla">
            <div class = "separar col-lg-4">
                <img class="imagem" src="https://via.placeholder.com/420" alt="" >
            </div>

            <div class = "separar col-lg-4">
                <img class="imagem" src="https://via.placeholder.com/420" alt="" >
            </div>

            <div class = "separar col-lg-4">
                <img class="imagem" src="https://via.placeholder.com/420" alt="" >
            </div>
        </div><br>  
    </div>
@endsection
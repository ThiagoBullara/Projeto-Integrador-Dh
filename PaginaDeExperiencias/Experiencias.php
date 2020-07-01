<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://i.ibb.co/q7Wkrgq/icon.png">
    <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Experiencias.css">
    <link rel="stylesheet" href="../EstilosPadrao/styleDefault.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$(".wish-icon i").click(function(){
			$(this).toggleClass("fa-heart fa-heart-o");
		}); 
	});	
</script>

    <title>Todas as experiências</title>
</head>
<?php require_once('../Header,footer,index/header.php')?>

<body>
    <!-- banner -->
    <section class="container-fluid">
            <div class="banner row">
                <div class="col-lg-12">
                    <div class="banner-info">
                        <h2>bem-vindo</h2>
                        <h1>Venha ter experiências incriveis</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, nobis quisquam magnam excepturi labore natus deserunt asperiores provident error incidunt vitae, laborum, molestias aperiam maxime facere perferendis pariatur odit obcaecati.</p>
                    </div>
                </div>
    </section>
    <!-- carrossel 1 -->
    <section class="container-fluid">
        <div class="row tarja">
            <div class="col-lg-12">
                <h2>Aprenda a cozinhar com grandes chefes</h2>
            </div>
        </div>
    <section class="carrossel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>novas <b>Experiências</b></h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/ipad.jpg" class="img-responsive" alt="">									
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/headphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Brownie da familia com Thiko</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>		
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-air.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Venha descobrir os sabores do Sul</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>								
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/nikon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Jantar onde você quiser</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/play-station.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-pro.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/speaker.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/galaxy.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>						
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/iphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/canon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/pixel.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>	
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/watch.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- carrossel 2 -->
    <section class="carrossel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>melhores <b>Experiências</b></h2>
                        <div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel2" data-slide-to="1"></li>
                            <li data-target="#myCarousel2" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="" class="img-responsive" alt="">									
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/headphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Brownie da familia com Thiko</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>		
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-air.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Venha descobrir os sabores do Sul</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>								
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/nikon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Jantar onde você quiser</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/play-station.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-pro.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/speaker.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/galaxy.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>						
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/iphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/canon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/pixel.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>	
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/watch.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel2" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel2" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- imagem e explicaçoes -->
    <section class= "container-fluid" >
            <div class = "row" > 
                <div class="col-lg-1"></div>
                <div class= "col-lg-4">
                    <h1>Arrisque novas experiências com a gente</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam praesentium iste minima obcaecati. Rem deserunt delectus nostrum, unde placeat in maxime inventore saepe tenetur similique ab fuga quis maiores minus?<br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, quod repudiandae, odio tempora, eum accusantium ipsam quos quidem earum suscipit at consectetur! At, incidunt itaque modi sed adipisci quam veritatis!<br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, officia. Fuga voluptatum quae cum sint, aliquid aliquam eius porro nihil reiciendis ab placeat itaque qui sapiente! Doloremque magnam facere incidunt.</p>
                </div>
                    
                <div class= "col-sm-7">
                    <img src="https:///images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt=" " width="90%">
                </div>
            </div>
    </section>
    <!-- carrossel 3 -->
    <section class="carrossel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Para fazer com a <b>familia</b></h2>
                        <div id="myCarousel3" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel3" data-slide-to="1"></li>
                            <li data-target="#myCarousel3" data-slide-to="2"></li>
                        </ol>   
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="" class="img-responsive" alt="">									
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/headphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Brownie da familia com Thiko</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>		
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-air.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Venha descobrir os sabores do Sul</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>								
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/nikon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Jantar onde você quiser</h4>									
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/play-station.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/macbook-pro.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/speaker.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/galaxy.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>						
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/iphone.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/canon.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/pixel.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>	
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                            <div class="img-box">
                                                <img src="/examples/images/products/watch.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Aprenda a dormir com Texugo</h4>
                                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary">Participar</a>
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel3" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel3" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <?php include('../Header,footer,index/footer.php')?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
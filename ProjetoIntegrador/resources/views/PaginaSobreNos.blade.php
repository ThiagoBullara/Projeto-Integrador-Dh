@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/PaginaSobreNos.css')}}">
@endsection

@section('titulo')
	BuyHood - Sobre nós 
@endsection

@section('conteudo')

<div class= "container-fluid meio" >
    <div class = "row verdeclaro" > 
        <div class= "conteudo1 col-lg-6" >
            <h1 class="mb-5">Sobre nós</h1>
            <p> 
                Somos a BuyHood, uma uma startup jovem e brasileira, comprometida a trazer novas experiências gastrônomicas para nossos clientes.<br>
                Nascemos com o objetivo de facilitar o cotidiano de quem busca o diferente. Trazendo a gastronomia para mais perto das pessoas, e não só isso, mostrando aos brasileiros
                um jeito novo de aproveitar a comida.
            </p>

            <p>
                Nosso time acredita que comer é muito mais do que uma ação automática que fazemos para viver mais um dia, a culinária é uma arte milenar, que na correria do dia a dia acabou se tornando
                mais uma obrigação do que um prazer. Vivemos no automático, com a cabeça a mil a todo momento, e nos esquecemos do mundo incrível que a gastronômia pode oferecer.
            </p>
            <p>
                Foi então que decidimos criar a BuyHood, uma plataforma para você explorar as melhores e mais inusitadas experiências gastronômicas na sua área. Tirar um momento para relaxar, e focar no hoje e no agora.
                Entramos em contato com alguns dos melhores restaurantes da área nobre de São Paulo, e conseguimos organizar algumas experiências inegualáveis.
            </p>

            <p>
                Estamos sempre abertos a novas ideias e sugestões, e trabalhamos duro para providenciar momentos únicos para você e as pessoas que você mais ama.
                Junte-se a nós, e redescubra a arte de comer!
            </p>

            <p>
                Equipe BuyHood
            </p>

        </div>

        <div class= "col-lg-6">
            <img class="imagem" src="https://ak.picdn.net/shutterstock/videos/6604379/thumb/1.jpg" width="100%" alt=" " >
        </div>
    </div>
    
    <div class="time mt-5 mb-4">
        <h1 class="mb-5">Nosso Time</h1>
        <div class="row">
            <div class="col-lg-3">
                <div class="time-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQEHlhEBKYLZ8w/profile-displayphoto-shrink_200_200/0?e=1606348800&v=beta&t=GYBl3-tJ-si79LMJzYw8FBd-iXPNS6JVGuyUNCyNtwA" width="150"alt="" height="150" class="foto-time-perfil">
                    <h5 class="mt-4" >Raphael Scandura</h5>
                    <p>Encontre-me em:</p>
                    <a href="https://github.com/raphaelscandura"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/raphaelscandura/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="time-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHX4iHg2fyjKA/profile-displayphoto-shrink_200_200/0?e=1606348800&v=beta&t=sebA56WD_EPkvE7uLZsv42YuYOrLp0FDLiC3EOmbTcw" width="150" height="150" alt="" class="foto-time-perfil">
                    <h5 class="mt-4" >Henrique Evers</h5>
                    <p>Encontre-me em:</p>
                    <a href="https://github.com/EversHenrique"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/henriqueewers/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="time-card">
                    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHxecPlm_qNow/profile-displayphoto-shrink_200_200/0?e=1606348800&v=beta&t=yVNTDvHQ4hxF1JqfiyJYtfJpNnKwe1Ca9kO302bdFWM" width="150" height="150" alt="" class="foto-time-perfil">
                    <h5 class="mt-4" >Luis Felipe de Oliveira</h5>
                    <p>Encontre-me em:</p>
                    <a href="https://github.com/LuisFelipeOl"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/lufelipeoliveira/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="time-card">
                    <img src="https://avatars0.githubusercontent.com/u/66804021?s=460&u=c7f7405c56959a3bbf5eb721d932a74bd953971b&v=4" width="150" height="150" alt="" class="foto-time-perfil">
                    <h5 class="mt-4" >Thiago Bullara</h5>
                    <p>Encontre-me em:</p>
                    <a href="https://github.com/ThiagoBullara"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/thiago-bullara-leite-b92a901a9/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>


    <section id="FAQ">
        <div class="faq">           
            <h2 class="faq-title">F.A.Q.</h2>

            <button class="accordion">O que vocês vendem no seu site? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Nós vendemos experiências gastronômicas que são exclusivas da nossa plataforma. Vamos aos melhores restaurantes da região e pedimos para eles organizarem uma atividade inesquecível, e jamais antes vista na região, e depois de muito pensar e conversar, fechamos o acordo para trazer a nossa plataforma, somente as melhores ideias! Aproveite!</p>
                </div>

            <button class="accordion">O que são "Experiências Gastronômicas"? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Vamos aos melhores restaurantes da região e pedimos para eles organizarem uma atividade inesquecível, e jamais antes vista na região, e depois de muito pensar e conversar, fechamos o acordo para trazer a nossa plataforma, somente as melhores ideias! Aproveite!</p>
                </div>

            <button class="accordion">Posso comprar mais de um experiência por vez? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Tecnicamente, não. Você só pode colocar no carrinho e fazer checkout com uma experiência por vez, isso é feito porque nosso site foi criado para ser acessível para todos, e algumas pessoas poderiam ficar confusos de como tudo isso iria funcionar, no entanto, pode fazer outra compra com outra experiência e ativa-lás quando tiver vontade (Termos e Condições se aplicam)</p>
                </div>

            <button class="accordion">Como eu resgato a minha experiência? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Você receberá um código de QR (Aquele quadradinho pixelado preto e branco) no seu e-mail (ele também fica salvo no seu perfil aqui na BuyHood!), basta chegar no restuarante que você comprou essa experiência, mostrar o QR Code e pronto! A partir daí, só aproveitar um momento inesquecível </p>
                </div>

            <button class="accordion">Posso resgatar minha experiência qualquer dia, qualquer hora? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Não, as experiências são cuidadosamente planejadas pelos restaurantes e pela equipe BuyHood, para que você possa resgatar a sua experiência, é necessário que você compareca no restaurante cadastrado no horário válido de sua experiência (Informação que você recebe no seu e-mail e também está no seu perfil)</p>
                </div>

            <button class="accordion">E se eu esquecer de levar o QR Code no dia que for resgatar a experiência? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>O QR Code é necessário para que você ative a experiência, sem ele, você não poderá desfrutar do serviço adiquirido :(</p>
                </div>

            <button class="accordion">Tive um problema com uma experiência, o que devo fazer? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Se você teve qualquer problema com a sua compra, a plataforma BuyHood ou durante a sua experiência, por favor não hesite em nos contatar no forumlário de contato que você encontra nessa mesma página! Estamos aqui para te ajudar!</p>
                </div>

            <button class="accordion">Onde eu encontro as experiências que eu comprei? <i class="fas fa-plus-square"></i></button>
                <div class="panel">
                    <p>Elas estão localizadas na seção "Minhas Compras" que você encontra no seu perfil, aqui na BuyHood! (Nós também te enviamos um e-mail depois de cada compra)</p>
                </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                        panel.style.display = "none";
                        } else {
                        panel.style.display = "block";
                        }
                    });
                }
            </script>
        </div>
    </section>

    <section id="Contato">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6">
                <div style="text-align:center">
                    <h2>Contate-nos!</h2>
                    <p>Nos envie uma mensagem e nós responderemos assim que possível!</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="firstname" placeholder="Digite aqui seu primeiro nome...">
                            <label for="surname">Sobrenome</label>
                            <input type="text" id="surname" name="surname" placeholder="Digite aqui seu sobrenome...">
                            <label for="subject">Assunto</label>
                            <select id="subject" name="subject">
                                <option value="feedback">Dar um feedback</option>
                                <option value="opinion">Dar uma opinião</option>
                                <option value="problem">Tenho um problema...</option>
                                <option value="other">Outro...</option>
                            </select>
                            <label for="messsage">Mensagem</label>
                            <textarea id="messsage" name="messsage" placeholder="Digite aqui sua mensagem" style="height:170px"></textarea>
                            <button class="btn-buyhood" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe class="responsive-iframe" src="https://www.google.com/maps/d/embed?mid=1bR-u0RxdThunkn-_P-Y29h_ru83XtfKC" width="100%" height="100%"></iframe>
            </div>
        </div>
    </section>
</div>

@endsection
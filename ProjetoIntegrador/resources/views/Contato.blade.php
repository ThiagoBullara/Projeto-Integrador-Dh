@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/Contato.css')}}">
@endsection

@section('titulo')
	BuyHood - Política De Privacidade 
@endsection

@section('conteudo')
    <div class="container">
        <div style="text-align:center">
            <h2>Contate-nos!</h2>
            <p>Nos envie uma mensagem e nós responderemos em no máximo um dia útil!</p>
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
@endsection

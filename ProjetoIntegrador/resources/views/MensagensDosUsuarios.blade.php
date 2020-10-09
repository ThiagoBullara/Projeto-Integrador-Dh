@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{asset('css/MensagensDosUsuarios.css')}}">
@endsection

@section('titulo')
	BuyHood - Mensagens dos usuários
@endsection

@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h1 class="h-contato">Mensagens dos usuários</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h-contato mt-4 mb-5">Filtrar mensagens</h2>
            </div>
        </div>
        <form action="/filtrarMensagens" method="GET">
            <div class="row row-tags">
                <div class="col-">
                    <button type="submit" value="todas" class="tag" name="tipo">Todas</button>
                </div>
                <div class="col-">
                    <button type="submit" value="Feedback" class="tag" name="tipo">Feedback</button>
                </div>
                <div class="col-">
                    <button type="submit" value="Opinião" class="tag" name="tipo">Opinião</button>
                </div>
                <div class="col-">
                    <button type="submit" value="Problema" class="tag" name="tipo">Problema</button>
                </div>
                <div class="col-">
                    <button type="submit" value="Negócios" class="tag" name="tipo">Negócios</button>
                </div>
                <div class="col-">
                    <button type="submit" value="Outro" class="tag" name="tipo">Outro</button>
                </div>
            </div>
        </form>
        <table class="table table-striped table-dark mt-5 mb-5">
            <thead>
                <tr>
                    <th scope="col"># Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Menssagem</th>
                    <th scope="col">Responder</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mensagens as $mensagem)
                    <tr>
                        <th scope="row">{{ $mensagem->id_contato }}</th>
                        <td>{{ $mensagem->name }}</td>
                        <td>{{ $mensagem->email }}</td>
                        <td>{{ $mensagem->subject }}</td>
                        <td>{{ $mensagem->message }}</td>
                        <td>
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">Responder</button>
                            <form action="/EnviarEmail" method="POST">
                                @csrf                                
                                <input type="hidden" name="nome_usuario" value=" {{$mensagem->name }} ">
                                <input type="hidden" name="email_usuario" value=" {{$mensagem->email }} ">
                                <input type="hidden" name="message_usuario" value=" {{$mensagem->message }} ">
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Enviar e-mail para o usuário</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <textarea name="menssage_for_user" id="menssage_for_user" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="h-contato mt-5 mb-5">Ainda não existem mensagens</h2>
                        </div>
                    </div>
                @endforelse
            </tbody>
        </table>
        
    </div>



@endsection
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://i.ibb.co/0tNkSBr/Screenshot-1-removebg-preview.png%22%3E">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/Contato.css')}}">
        <title>Buyhood - Local Foods</title>
    </head>
    <body>

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
                    <input type="submit" value="Submit">
                </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

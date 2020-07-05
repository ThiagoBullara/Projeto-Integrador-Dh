<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="contato.css">
        <title>Buyhood - Local Foods</title>
    </head>
    <body>
        <?php require_once('../Header,footer,index/header.php')?>

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
        
        <?php include('../Header,footer,index/footer.php')?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Buyhood - Local Foods</title>
    </head>
    <body>
        <?php require_once('../Header,footer,index/header.php')?>

        <style>
            .container{
                margin-bottom: 5vw;
            }

            .iframe-wrap {
                position: relative;
                overflow: hidden;
                width: 100%;
                padding-top: 56.25%;
            }


            .responsive-iframe {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
            }

        </style>

        <div class="container">
            <div class="row">
                <div class="iframe-wrap col-lg-12">
                    <iframe class="responsive-iframe" src="https://www.google.com/maps/d/embed?mid=1bR-u0RxdThunkn-_P-Y29h_ru83XtfKC" width="100%" height="100%"></iframe>
                </div>
            </div>
        </div>
        
        <?php require_once('../Header,footer,index/footer.php')?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

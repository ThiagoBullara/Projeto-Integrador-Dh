<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://o.remove.bg/downloads/f0e8a96a-b51c-4828-8192-c4bd441321b4/icon-removebg-preview.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="AllRestaurantPages.css">
        <title>Buyhood - Local Foods</title>
    </head>
    <body>

        <?php require_once('../Header,footer,index/header.php')?>

        <div class="container-fluid row">
            <div class="col-lg-6 restaurant-full-details">
                <div class="filters row">
                    <div class="col-lg-12">
                    <div>Filtros:</div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O que procura?</button>
                            <div class="dropdown-menu">
                                <form>
                                    <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                        <label for="restaurante">Restaurantes</label><br>
                                    <input type="checkbox" id="experiência" name="experiência" value="Experiência">
                                        <label for="experiência">Experiências</label>
                                </form>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quanto quer gastar?</button>
                            <div class="dropdown-menu">
                                <form>
                                    <input type="checkbox" id="preço" name="preço" value="preço">
                                        <label for="preço">$</label><br>
                                    <input type="checkbox" id="preço" name="preço" value="preço">
                                        <label for="preço">$$</label><br>
                                    <input type="checkbox" id="preço" name="preço" value="preço">
                                        <label for="preço">$$$</label><br>
                                    <input type="checkbox" id="preço" name="preço" value="preço">
                                        <label for="preço">$$$$</label><br>
                                    <input type="checkbox" id="preço" name="preço" value="preço">
                                        <label for="preço">$$$$$</label>
                                </form>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O que quer comer?</button>
                            <div class="dropdown-menu">
                                <form>
                                    <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Italiana</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Japonesa</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Indiana</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Fast Food</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Árabe</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Mexicana</label><br>
                                        <input type="checkbox" id="restaurante" name="restaurante" value="Restaurante">
                                            <label for="restaurante">Culinária Exótica</label>
                                </form>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classificação dos usuários</button>
                            <div class="dropdown-menu">
                                <form>
                                    <input type="checkbox" id="rating" name="rating" value="rating">
                                        <label for="rating">★</label><br>
                                    <input type="checkbox" id="rating" name="rating" value="rating">
                                        <label for="rating">★★</label><br>
                                    <input type="checkbox" id="rating" name="rating" value="rating">
                                        <label for="rating">★★★</label><br>
                                    <input type="checkbox" id="rating" name="rating" value="rating">
                                        <label for="rating">★★★★</label><br>
                                    <input type="checkbox" id="rating" name="rating" value="rating">
                                        <label for="rating">★★★★★</label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="restaurant-list row">
                    <div class="col-lg-8">
                    <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php">                        
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>
                <a class="hyperlink-restaurant-list" href="../PaginaDeRestaurante/restaurantes.php"><div class="restaurant-list row">
                    <div class="col-lg-8">
                        <div class="restaurant-list-text">
                            <div class="restaurant-name">
                                <span class="restaurant-name">Burger King</span>
                            </div>
                            <div class="description">
                                <span id="rating-value">3.5</span>               
                                <span class="rating-stars">★★★★★</span>
                                <span id="amount-of-ratings">(536)</span>
                                <div id="restaurant-details">
                                <span id="pricing">$$</span>
                                <span id="detail-divider">-</span>
                                <span id="restaurant-tipe">Fast-Food</span>
                                <span id="detail-divider">-</span>
                                <span id="address">Av.Pavão, 109</span>
                                </div>
                                <span>Aberto até as 23:00</span>
                            </div>
                            <div class="allergies-checklist">
                                <span>🗸 Opção Vegana 🗸 Opção Vegetariana 🗸 Opção Sem Glútem</span>
                            </div>
                        </div>
                    </div>
                    <div class="restaurant-photo col-lg-4">
                        <img src="http://via.placeholder.com/200x150" alt="Foto">
                    </div>
                </div></a>          
            </div>
            <div class="col-lg-6">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7312.161625134895!2d-46.6739277749744!3d-23.601434538651848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srestaurantes%20moema!5e0!3m2!1sen!2sbr!4v1593622377955!5m2!1sen!2sbr" width="900" height="750" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

        <?php include('../Header,footer,index/footer.php')?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

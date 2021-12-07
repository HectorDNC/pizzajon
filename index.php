<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzajon</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-lux.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container px-2 px-md-0">
            <a href="#header" class="navbar-brand nav-link-scroll">Pizzajon</a>
            <button class="navbar-toggler" id="navbar-toggler" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav ml-auto px-3 px-md-0">
                    <!-- <li class="nav-item"><a href="#header" class="nav-link">Inicio</a></li> -->
                    <li class="nav-item"><a href="#menu" class="nav-link nav-link-scroll">Menú</a></li>
                    <li class="nav-item"><a href="#contacto" class="nav-link nav-link-scroll">Contacto</a></li>
                    <li class="nav-item"><a href="#mapa" class="nav-link nav-link-scroll">Mapa</a></li>
                    <!-- <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                Acceder
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Iniciar Sesión</a>
                                <a class="dropdown-item" href="#">Registrarse</a>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header id="header" class="py-3 full-height">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-img d-flex justify-content-center">
                        <img src="assets/img/celular 4.png" alt="" width="90%">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="header-content">
                        <h1 class="display-4 text-center">Pizzajon</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                            ipsum minus praesentium labore assumenda, magnam, omnis eos, neque nemo aliquam vero?
                            Exercitationem aliquid incidunt similique repellat eos dolore recusandae facilis!</p>
                        <a href="about" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Comentario -->
    <section id="section" class="py-4 bg-primary">
        <div class="container text-center my-3">
            <p class="h4 text-white">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae, assumenda, et voluptatibus magni
                laudantium numquam molestias labore perspiciatis consequuntur eaque adipisci quam dolorem temporibus
                maxime eveniet, eum voluptates! Sapiente, recusandae?
            </p>
            <cite class="h5 text-white">- Tom</cite>
        </div>
    </section>
    <!-- Menú -->
    <section id="menu" class="py-3 full-height">
        <div class="container">
            <div class="row mb-md-5 d-flex justify-content-center">
                <h2 class="display-4 mb-0">Menú</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="noticia-img d-flex justify-content-center">
                        <img src="assets/img/celular 1.png" alt="Smartphone" width="100%">
                    </div>
                </div>
                <div class="col-md-6 my-auto">
                    <div class="noticia-descripcion">
                        <h3>Lo más nuevo</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eligendi recusandae
                            eaque rem alias, enim, omnis amet dicta cupiditate sapiente, explicabo quod corrupti est
                            voluptatum nulla tenetur accusantium repudiandae. Necessitatibus!</p>
                        <a href="#1" class="btn btn-outline-primary px-3 py-2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <button class="btn btn-primary mx-1 px-3 py-2"><span class="h4 text-white"><</span></button>
                <button class="btn btn-primary mx-1 px-3 py-2"><span class="h4 text-white">></span></button>
            </div>
        </div>
    </section>
    <!-- Contacto -->
    <section id="contacto" class="bg-primary py-3 text-white p-1">
        <div class="container my-3 ">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="text-center text-white">Lorem Ipsum</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex
                        consequatur, autem alias, reprehenderit labore quia iusto eligendi illum soluta necessitatibus
                        tenetur? Rem, dolorem cupiditate repellendus voluptas magnam facilis et.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center text-white">Lorem Ipsum</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex
                        consequatur, autem alias, reprehenderit labore quia iusto eligendi illum soluta necessitatibus
                        tenetur? Rem, dolorem cupiditate repellendus voluptas magnam facilis et.</p>
                </div>
                <div class="col-md-4">
                    <h2 class="text-center text-white">Lorem Ipsum</h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ex
                        consequatur, autem alias, reprehenderit labore quia iusto eligendi illum soluta necessitatibus
                        tenetur? Rem, dolorem cupiditate repellendus voluptas magnam facilis et.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Mapa -->
    <section id="mapa" class="mapa py-5 full-height">
        <div class="container">
            <div class="row">
                <!-- Espacio en blanco de 7 columnas -->
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <form action="" class="card">
                        <div class="card-header">
                            <h2 class="text-center">Mapa</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="" id="" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="" id="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            </div>
                            <button class="btn btn-outline-secondary btn-block" type="button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer id="footer" class="bg-black text-white">
        <div class="container p-4">
            <p class="lead text-center">Pizzajon - Copyright &copy; 2021</p>
            <div class="d-flex justify-content-center">
                <i class="fab fa-facebook fa-2x mx-1"></i>
                <i class="fab fa-instagram fa-2x mx-1"></i>
                <i class="fab fa-twitter fa-2x mx-1"></i>
                <i class="fab fa-youtube fa-2x mx-1"></i>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
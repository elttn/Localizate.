<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCALIZATE</title>
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="vh-100">

    <!----- Barra de navegación ----->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <h1 class="navbar-brand titulo">LOCA<span class="text-primary titulo-gren">LIZATE</span></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-start"
                aria-controls="navbar-start" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-start">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Cerrar sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_deUsuarios.php">Acerca de nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!----- Carrusel de imágenes ----->
    <div id="carouselE1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselE1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="../Public/Imagenes/Negocios/Horizontalez/Negocios1.jpg" class="d-block w-100" alt="..."
                    style="width: 100%; height: auto;">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="../Public/Imagenes/Negocios/Horizontalez/Local3.jpg" class="d-block w-100" alt="..."
                    style="width: 100%; height: auto;">
            </div>
            <div class="carousel-item">
                <img src="../Public/Imagenes/Negocios/Horizontalez/Reposteria1.jpg" class="d-block w-100" alt="..."
                    style="width: 100%; height: auto;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselE1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselE1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!----- Vistas de Restaurantes ----->
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/sason_maya.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Fonda2.jpg"
                                style="width: 100%; height: auto;" alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Sazón Maya</h3>
                                <p class="text">Sazón Maya combina la rica tradición culinaria maya con un toque
                                    moderno. Ofrece platos auténticos con ingredientes frescos y locales, creando una
                                    experiencia única en el norte de México.</p>
                                <p class="text">Ubicación: Monterrey, Nuevo León.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/mariscos_pacifico.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Restaurante6.jpg"
                                style="width: 100%; height: auto;" style="width: 100%; height: auto;"
                                alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Mariscos del Pacífico</h3>
                                <p class="text">Este restaurante se especializa en mariscos frescos del Pacífico,
                                    ofreciendo
                                    una amplia variedad de ceviches, cocteles y platillos marineros. La decoración
                                    rústica
                                    crea un ambiente costero.</p>
                                <p class="text">Ubicación: Guadalajara, Jalisco.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/fiesta_tapatia.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Restaurante7.jpg"
                                style="width: 100%; height: auto;" style="width: 100%; height: auto;"
                                alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Fiesta Tapatía</h3>
                                <p class="text">Fiesta Tapatía celebra la diversidad de la cocina tapatía con sus
                                    sabores
                                    audaces y auténticos. El menú incluye platillos típicos de Jalisco, desde birria
                                    hasta
                                    tortas ahogadas.</p>
                                <p class="text">Ubicación: Cancún, Quintana Roo.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/sabores_oaxaqueños.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Restaurante8.jpg"
                                style="width: 100%; height: auto;" style="width: 100%; height: auto;"
                                alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Sabores Oaxaqueños</h3>
                                <p class="text">Un rincón de Oaxaca en Tijuana, este restaurante ofrece una experiencia
                                    culinaria completa con mole, tlayudas y mezcal. La decoración refleja la rica
                                    herencia cultural de Oaxaca.</p>
                                <p class="text">Ubicación: Tijuana, Baja California.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/antojitos_poblanos.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Restaurante9.jpg"
                                style="width: 100%; height: auto;" style="width: 100%; height: auto;"
                                alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Antojitos Poblanos</h3>
                                <p class="text">Este acogedor restaurante trae los sabores de Puebla a la península de
                                    Yucatán. Con platillos como chiles en nogada y mole poblano, es un festín para los
                                    amantes de la comida poblana.</p>
                                <p class="text">Ubicación: Mérida, Yucatán.</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <a href="link/cocina_yucateca.php">
                        <div class="card text-white text-center bg-car1 pb-2">
                            <img src="../Public/Imagenes/Negocios/Horizontalez/Restaurant.jpg"
                                style="width: 100%; height: auto;" style="width: 100%; height: auto;"
                                alt="Imagen Sazón Maya" class="img-fluid">
                            <div class="card-body">
                                <h3 class="card-title titulo">Cocina Yucateca</h3>
                                <p class="text">Un tributo a la cocina yucateca en el norte de México, este restaurante
                                    ofrece delicias como cochinita pibil y panuchos. La decoración incluye elementos
                                    tradicionales yucatecos.</p>
                                <p class="text">Chihuahua, Chihuahua.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-----  INFORMACIÓN  ----->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Descubre los sabores únicos</h2>
                    <p>Explora la diversidad culinaria de los mejores restaurantes en nuestra plataforma. Nuestro portal
                        te guía para descubrir experiencias gastronómicas inigualables.<br> Desde pequeñas joyas locales
                        hasta restaurantes de renombre internacional, te conectamos con lugares que despiertan tus
                        sentidos.</p>
                    <div class="box-icons">
                        <img src="../Public/Imagenes/Negocios/Horizontalez/Icono.png" alt="Icono de Restaurante">
                    </div>
                    <p class="py-3">¿Eres dueño de un restaurante? <a href="../sesion.php">Únete</a> a nosotros y
                        desbloquea el
                        potencial completo de tu negocio. Ofrecemos una plataforma publicitaria poderosa que amplifica
                        tu visibilidad y atrae a nuevos clientes. Con herramientas especializadas, podrás destacar tus
                        platos, promociones y eventos especiales.</p>
                    <p>Descubre el arte de la gastronomía y apoya a los locales que dan vida a la escena culinaria. Ya
                        sea que busques una experiencia gourmet o algo más casual, nuestra plataforma tiene algo para
                        todos.</p>
                    <p>¡Explora, saborea y apoya!</p>
                </div>
            </div>
        </div>
    </section>

    <!-----  FOOTER   ----->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">Todos los derechos reservados LOCALIZATE ©</p>
        </div>
    </footer>
    <script src="../Public/js/bootstrap.bundle.min.js"></script>

</body>

</html>
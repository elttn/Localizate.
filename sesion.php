<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>

<body>
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
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./sesion.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de.php">Acerca de nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded" style="background-image: url('Public/Imagenes/Negocios/Verticales/Bebidas3.jpg');
           background-size: cover;
           background-position: center;">
            </div>


            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="./Public/Imagenes/Login/LOCALIZATE.jpeg" alt="Mi Logo" style="width: 20%;">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido a LOCALIZATE</h2>

                <!----- LOGIN ----->
                <div id="inicio-sesion">
                    <form action="login.php" method="POST">
                        <div class="mb-4">
                            <label for="correo" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="conectado" class="form-check-input">
                            <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </div>
                        <div class="my-3">
                            <span>¿No tienes cuenta? <a href="#" onclick="Registro()">Regístrate</a></span>
                        </div>
                    </form>

                </div>

                <!---- CREAR CUENTA USUARIO---->
                <div class="col bg-white p-5 rounded-end d-none" id="registro-cuenta">
                    <h2 class="fw-bold text-center py-1">¿Qué tipo de cuenta desea crear?</h2>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-2" onclick="Usuario()">Cuenta de
                            usuario</button>
                        <button type="submit" class="btn btn-primary" onclick="Negocio()">Cuenta de negocio</button>
                    </div>
                </div>

                <div class="col bg-white p-5 rounded-end d-none" id="formato-usuario">
                    <h3 class="text-center py-2">Únete a nuestra comunidad ahora.</h3>
                    <form action="reg_usuario.php" method="POST" class="py-5">
                        <input type="hidden">
                        <div class="mb-4">
                            <label for="nombre" class="form-label">Nombre(s)</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="mb-4">
                            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apellido_paterno" required>
                        </div>
                        <div class="mb-4">
                            <label for="apellidom" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="apellido_materno" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Crear cuenta</button>
                        </div>
                    </form>

                    <div class="my-3">
                        <span>¿Ya tienes una cuenta? <a href="#" onclick="InicioSesion()">Iniciar sesión</a></span>
                    </div>
                </div>

                <div class="col bg-white p-5 rounded-end d-none" id="formato-negocio">
                    <h3 class="text-center py-2">Haz crecer tu negocio aquí</h3>
                    <form action="reg_negocio.php" method="POST">
                        <div class="mb-4">
                            <label for="nombre_negocio" class="form-label">Nombre del Negocio</label>
                            <input type="text" class="form-control" name="nombreNegocio" required>
                        </div>
                        <div class="mb-4">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" name="direccion" required>
                        </div>
                        <div class="mb-4">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" name="telefono" required>
                        </div>
                        <div class="mb-4">
                            <label for="categoria" class="form-label">Categoría del Negocio</label>
                            <select class="form-select" name="categoria" required>
                                <option value="" disabled selected>Selecciona una categoría</option>
                                <option value="Comida rápida">Comida rápida</option>
                                <option value="Restaurante formal">Restaurante formal</option>
                                <option value="Gourmet">Gourmet</option>
                                <option value="Familiar">Familiar</option>
                                <option value="Temático">Temático</option>
                                <option value="take away">Take Away</option>
                                <!-- Agrega más opciones según sea necesario -->
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="email_negocio" class="form-label">Correo electrónico del Negocio</label>
                            <input type="email" class="form-control" name="emailNegocio" required>
                        </div>
                        <div class="mb-4">
                            <label for="password_negocio" class="form-label">Contraseña del Negocio</label>
                            <input type="password" class="form-control" name="passwordNegocio" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrar Negocio</button>
                        </div>
                    </form>
                    <div class="my-3">
                        <span>¿Ya tienes una cuenta? <a href="#" onclick="InicioSesion()">Iniciar sesión</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo '<script>alert("Registro exitoso.");</script>';
    }
    ?>

    <script src="./Public/js/bootstrap.bundle.min.js"></script>
    <script src="./funciones.js"></script>
</body>

</html>
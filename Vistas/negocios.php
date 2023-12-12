<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Platillos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="vh-100">

<style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 1.5rem;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: bold;
        }

        .titulo {
            font-size: 2rem;
        }

        .titulo-gren {
            color: #ffc107;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        h2 {
            color: #007bff;
        }

        form {
            margin-top: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            border-radius: 5px;
        }

        button.btn-primary {
            background-color: #007bff;
            border: none;
        }

        button.btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        table.table thead th {
            background-color: #007bff;
            color: #ffffff;
            border: none;
        }

        table.table tbody tr:hover {
            background-color: #f2f2f2;
        }

        .btn-warning,
        .btn-danger {
            color: #ffffff;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .mt-4 {
            margin-top: 40px;
        }

        .card-deck {
            margin-top: 20px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #007bff;
            font-weight: bold;
        }

        .card-text {
            color: #495057;
        }
    </style>

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
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="negocios.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../acerca_de.php">Acerca de nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="py-5">Formulario de Platillos</h2>
        <form action="save_dates.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Platillo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Platillo:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio del Platillo:</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Platillo</button>
            <a href="../index.php" class="btn btn-secondary">Regresar</a>
        </form>

        <div class="mt-4">
            <h3>Platillos Guardados</h3>
            <?php
            include_once('../include/conexion.php');
            $conexion = new Connection();
            $conn = $conexion->open();

            $sql = "SELECT * FROM platillos";
            $stmt = $conn->query($sql);

            if ($stmt->rowCount() > 0) {
                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($row = $stmt->fetch()) {
                    echo '<tr>
                        <td>' . $row['nombre'] . '</td>
                        <td>' . $row['descripcion'] . '</td>
                        <td>' . $row['precio'] . '</td>
                        <td><a href="editar.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Editar</a></td>
                        <td><a href="eliminar.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Eliminar</a></td>
                      </tr>';
                }

                echo '</tbody></table>';
            } else {
                echo 'No hay platillos guardados.';
            }
            ?>
        </div>

        <div class="mt-4 tarjeta-container">
            <h3>Tarjetas de platillos</h3>
            <div class="card-deck">
                <?php
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    echo '<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['nombre'] . '</h5>
                            <p class="card-text">' . $row['descripcion'] . '</p>
                            <p class="card-text"><strong>Precio: $ </strong>' . $row['precio'] . '</p>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">Todos los derechos reservados LOCALIZATE ©</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>

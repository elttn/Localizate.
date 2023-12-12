<?php
include_once('../Include/conexion.php');
$conexion = new Connection();
$conn = $conexion->open();

$platillo = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM platillos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $platillo = $stmt->fetch();
    } else {
        echo "Platillo no encontrado.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $sql = "UPDATE platillos SET nombre = :nombre, descripcion = :descripcion, precio = :precio WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $stmt->bindParam(':precio', $precio, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        header("Location: negocios.php");
        exit();
    } catch (PDOException $e) {
        echo "Error al actualizar el platillo: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Platillo</title>
    <!-- Bootstrap CSS -->
    <link href="../Public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Your existing PHP code for the form -->

        <form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $platillo['id'] ?? ''; ?>">

            <div class="form-group">
                <label for="nombre">Nombre del Platillo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $platillo['nombre'] ?? ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Platillo:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?php echo $platillo['descripcion'] ?? ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio del Platillo:</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="<?php echo $platillo['precio'] ?? ''; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Platillo</button>
            <a href="negocios.php" class="btn btn-secondary">Regresar</a>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js (for Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../Public/js/bootstrap.min.js"></script>
</body>
</html>

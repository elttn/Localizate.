<?php
session_start();
include_once('../include/conexion.php');

$conexion = new Connection();
$conn = $conexion->open();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $sql = "INSERT INTO platillos (nombre, descripcion, precio) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $nombre, PDO::PARAM_STR);
    $stmt->bindParam(2, $descripcion, PDO::PARAM_STR);
    $stmt->bindParam(3, $precio, PDO::PARAM_STR);

    try {
        $stmt->execute();
        echo "Platillo agregado correctamente.";
    } catch (PDOException $e) {
        echo "Error al agregar el platillo: " . $e->getMessage();
    }

    $conexion->close();
} else {
    exit();
}

header("Location: negocios.php");
?>

<?php

include_once('../include/conexion.php');
$conexion = new Connection();
$conn = $conexion->open();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM platillos WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        echo "Platillo eliminado correctamente.";
    } catch (PDOException $e) {
        echo "Error al eliminar el platillo: " . $e->getMessage();
    }
} else {
    echo "Solicitud no válida.";
}

header('location:negocios.php');
?>

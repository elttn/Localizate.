<?php
session_start();
include_once('include/conexion.php');

$conexion = new Connection();
$conn = $conexion->open();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreNegocio = $_POST['nombreNegocio'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $emailNegocio = $_POST['emailNegocio'] ?? '';
    $passwordNegocio = $_POST['passwordNegocio'] ?? '';
    $categoria = $_POST['categoria'] ?? '';

    if (empty($nombreNegocio) || empty($direccion) || empty($telefono) || empty($emailNegocio) || empty($passwordNegocio) || empty($categoria)) {
        $response = array('success' => false, 'message' => 'Error: Todos los campos son obligatorios.');
        echo json_encode($response);
        exit();
    }

    $stmt = $conn->prepare("SELECT COUNT(*) FROM RegistroUsuario WHERE Email = :email");
    $stmt->bindParam(':email', $emailNegocio);
    $stmt->execute();
    $countUsuario = $stmt->fetchColumn();

    $stmt = $conn->prepare("SELECT COUNT(*) FROM RegistroNegocio WHERE Email = :email");
    $stmt->bindParam(':email', $emailNegocio);
    $stmt->execute();
    $countNegocio = $stmt->fetchColumn();

    if ($countUsuario > 0 || $countNegocio > 0) {
        $response = array('success' => false, 'message' => "Error: El correo ya está registrado.");
        echo json_encode($response);
        exit();
    }

    $hashedPassword = password_hash($passwordNegocio, PASSWORD_DEFAULT);

    $sql = "INSERT INTO RegistroNegocio (Nombre, Direccion, Telefono, Email, Password, Categoria) VALUES (:nombreNegocio, :direccion, :telefono, :emailNegocio, :hashedPassword, :categoria)";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nombreNegocio', $nombreNegocio);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':emailNegocio', $emailNegocio);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':hashedPassword', $hashedPassword);

        $stmt->execute();

        $negocioRegistrado = array(
            'nombreNegocio' => $nombreNegocio,
            'direccion' => $direccion,
            'telefono' => $telefono,
            'emailNegocio' => $emailNegocio,
            'categoria' => $categoria
        );

        $negocios = isset($_SESSION['negocios']) ? $_SESSION['negocios'] : array();
        $negocios[] = $negocioRegistrado;
        $_SESSION['negocios'] = $negocios;

        header('location: sesion.php');
    
    } catch (PDOException $e) {
        echo "Error al registrar negocio: " . $e->getMessage();
    }
}

$conexion->close();
?>

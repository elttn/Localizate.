<?php
session_start();
include_once('include/conexion.php');

$conexion = new Connection();
$conn = $conexion->open();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("SELECT COUNT(*) FROM RegistroNegocio WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $countNegocio = $stmt->fetchColumn();

    $stmt = $conn->prepare("SELECT COUNT(*) FROM RegistroUsuario WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $countUsuario = $stmt->fetchColumn();

    if ($countNegocio > 0 || $countUsuario > 0) {
        echo "<script>
        alert('ERROR: El correo ya está registrado');
        window.location.href = 'sesion.php';
     </script>";
    } else {
        $sql = "INSERT INTO RegistroUsuario (email, Nombre, ApellidoPaterno, ApellidoMaterno, password) VALUES (:email, :nombre, :apellido_paterno, :apellido_materno, :password)";

        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido_paterno', $apellido_paterno);
            $stmt->bindParam(':apellido_materno', $apellido_materno);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            echo "<script>
                alert('Registro de usuario exitoso');
                window.location.href = 'sesion.php';
             </script>";
        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
    }
}

$conexion->close();
?>

<?php
session_start();
include_once('include/conexion.php');

$conexion = new Connection();

$conn = $conexion->open();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    try {
        $sqlUsuario = "SELECT ID, Nombre, Password FROM RegistroUsuario WHERE Email = :email";

        $stmtUsuario = $conn->prepare($sqlUsuario);

        $stmtUsuario->bindParam(':email', $email);

        $stmtUsuario->execute();

        $resultUsuario = $stmtUsuario->fetch(PDO::FETCH_ASSOC);

        if ($resultUsuario && password_verify($password, $resultUsuario['Password'])) {
            $_SESSION['usuario_id'] = $resultUsuario['ID'];
            $_SESSION['nombre_usuario'] = $resultUsuario['Nombre'];

            header("Location: vistas/usuarios.php");
            exit();
        } else {
            $stmt = $conn->prepare("SELECT * FROM RegistroNegocio WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $resultNegocio = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultNegocio && password_verify($password, $resultNegocio['Password'])) {
                $_SESSION['negocio_id'] = $resultNegocio['ID'];
                $_SESSION['nombre_negocio'] = $resultNegocio['NombreNegocio'];

                if ($resultNegocio && password_verify($password, $resultNegocio['Password'])) {
                    $_SESSION['negocio_id'] = $resultNegocio['ID'];
                    $_SESSION['nombre_negocio'] = $resultNegocio['NombreNegocio'];

                    $nombreNegocio = $_SESSION['nombre_negocio'];

                    header("Location: vistas/negocios.php");
                    exit();
                }
            } else {
                echo "<script>
            alert('Credenciales incorrectas para el negocio');
            window.location.href = 'sesion.php';
         </script>";
                exit();
            }

        }
    } catch (PDOException $e) {
        echo "Error en la base de datos. Contacte al administrador.";
    }
}

$conexion->close();
?>
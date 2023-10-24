<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $conexion = new mysqli($server, $user, $pass, $db);

    if($conexion-> connect_errno) {
        die("Conexión fallida: " . $conexion-> connect_errno);

    } else {
        echo "conectado";
    }

    $email = $_POST['email'];
$contrasena = $_POST['contrasena'];


$sql = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {

    session_start();
    $_SESSION['email'] = $email;
    header('Location: inicio.php');
} else {

    echo "Inicio de sesión fallido. Verifique su correo electrónico y contraseña.";
}

$conexion->close();
?>
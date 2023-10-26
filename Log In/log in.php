<?php
// Inicia la sesión (si no está iniciada)
session_start();

// Verifica si el usuario ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica las credenciales (debe implementar tu propia lógica de autenticación aquí)
    $usuario_valido = "usuario"; // Cambia esto con el usuario válido
    $contraseña_valida = "contraseña"; // Cambia esto con la contraseña válida

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
        // Autenticación exitosa, redirige a la página de inicio
        $_SESSION["usuario"] = $usuario;
        header("Location: inicio.php"); // Cambia "inicio.php" al nombre de tu página de inicio
        exit();
    } else {
        // Autenticación fallida, muestra un mensaje de error
        $error = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>
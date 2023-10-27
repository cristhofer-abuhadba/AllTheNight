<?php

$servidor = "localhost";
$usuario = "root";
$password = "";

$conexion = new mysqli($servidor, $usuario, $password)

if($conexion-> connect_error){
    die("Conexión fallida: " . $conexion-> connect_error)
}

echo "Conexión exitosa...";


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $usuario_valido = "usuario"; 
    $contraseña_valida = "contraseña"; 

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
        
        $_SESSION["usuario"] = $usuario;
        header("Location: inicio.php"); 
        exit();
    } else {
        
        $error = "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    
    <form action="login.php" method="POST"></form>
    
    <div class="cont">

        <button class="fondochange" onclick="changel()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                fill="currentColor" class="bi bi-brightness-low-fill" viewBox="0 0 16 16">
                <path
                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
            </svg></button>

        <button class="fondochange" onclick="changed()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars"
                viewBox="0 0 16 16">
                <path
                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                <path
                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
            </svg>
        </button>
<div>   
    
    <div id="circulo"></div>

     

        <div class="titulo">
            <h3>SCRIMER</h3>
        </div>

        <section class="form-login">

            <h5>Inicia Secion</h5>
            <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
            <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
            <input class="button" type="submit" name="" value="Ingresar">
            <p>
                <a href="#">¿Olvidaste tu contraseña?</a>
            </p>
        </section>

        <div  class="details">
            <a href="index.html">
            <h6 >ALL the Nigth</h6>
            <img  src="img/iconE.png" width="90px" class="AN">
        </a>
        </div>
        
    </div>
</body>

<script>

    

    function changel() {

        document.querySelector("*").style.filter = "invert(100%)";
        document.querySelector("#circulo").style.filter = "opacity(0%)"; 
        document.querySelector("*").style.transition = "0.4s";

    }
    function changed() {

        document.querySelector("*").style.filter = "none";
       document.querySelector("#circulo").style.filter = "opacity(100%)"; 
       document.querySelector("*").style.transition = "0.4s";
    }

</script>

</html>
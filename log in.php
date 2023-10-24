<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="post">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
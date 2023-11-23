<?php
require "conec.php";
if (isset($_POST["btnsesion"])) {
    // Recuperar las credenciales del formulario
    $username = $_POST["nombre"];
    $password = $_POST["contra"];



$consulta = $conexion->prepare("SELECT * FROM login WHERE Username = ? AND contrasena = ?");
    $consulta->bind_param("ss", $username, $password);
    $consulta->execute();
    $resultado = $consulta->get_result();

    // Verificar si se encontraron resultados
    if ($resultado->num_rows === 1) {
        session_start();
        $_SESSION["username"] = $username; // Almacena el nombre de usuario en la sesión
        header("Location: crudpage.php");
        echo "<div class='alert alert-info'>Inicio de sesión exitoso. ¡Bienvenido, $username!</div>";
    } else {
        echo "<div class='alert alert-info-danger'>Error</div>";
    }

}

?>
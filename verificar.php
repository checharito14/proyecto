<?php
     // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $usuarioValido = "admin";
    $contrasenaValida = "1234";

    if ($usuario === $usuarioValido && $password === $contrasenaValida) {
        // Usuario y contraseña correctos, redireccionar al contenido de administrador
        header("Location: contenido_administrador.php");
        exit; // Importante: asegúrate de salir del script después de redireccionar
    } else {
        // Usuario o contraseña incorrectos, mostrar mensaje de error
        header("Location: sesion.php?mensaje=error");
    }

?>
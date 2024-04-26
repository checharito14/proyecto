<?php
// Incluir el archivo de conexión a la base de datos
require "conexion.php";


        // Obtener los datos del formulario
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $pais = $_POST["pais"];
        $ciudad = $_POST["ciudad"];
        $mensaje = $_POST["mensaje"]; 
        
        // Preparar la consulta SQL para insertar los datos en la tabla de la base de datos
        $sql = "INSERT INTO InfoContacto (Nombre, Email, Telefono) 
                VALUES ('$nombre', '$email', '$telefono')";

        // Ejecutar la consulta y verificar si se realizó con éxito
        $conn->query($sql);
        
        // Cerrar la conexión a la base de datos
        $conn->close();
        header("Location: contacto.php?mensaje=exito");


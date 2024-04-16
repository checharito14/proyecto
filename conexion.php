<?php
$servername = "localhost";
$username = "root";
$password = "v10203040D:"; //Cambiar  por la contraseña de tu servidor MySQL
$dbname = "paginaWeb";
$port = 3306;
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
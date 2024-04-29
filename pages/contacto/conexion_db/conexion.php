<?php
$servername = "localhost";
$username = "root";
$password = "flacucho14:"; //Cambiar  por la contraseña de tu servidor MySQL
$dbname = "pagweb";
// $port = 3306;
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

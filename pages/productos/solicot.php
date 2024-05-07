<?php
require 'functions.php';
$mysqli = connect();

$modelo = $_POST['modelo'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = date('Y-m-d H:i:s');
$comentario = $_POST['mensaje'];



$res=$mysqli->query("INSERT INTO infocontacto (Nombre, Email, Telefono) VALUES ('$nombre', '$email', '$telefono')");

$consigueId=$mysqli->query("SELECT LAST_INSERT_ID();");
$idcontacto = $consigueId->fetch_row()[0];

$res=$mysqli->query("INSERT INTO solicot (Modelo, IdContacto, FechaSolicitud, Comentarios, Estatus) 
        VALUES ('$modelo', '$idcontacto', '$fecha','$comentario', 0)");

if ($res) {
    echo "<script language='JavaScript'>
                    alert('La solicitud de cotización se guardó correctamente');
                    location.assign('productos.php');
                    </script>";
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}
?>
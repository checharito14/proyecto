
<?php

require "conexion.php";

$tipo = $_POST['tipo'];

switch($tipo){
    case '1':
        $modelo = $_POST['modelo'];
        $cccp = $_POST['cccp'];
        $numcap = $_POST['numcap'];
        $rpmcap = $_POST['rpmcap']; 
        $sql = "INSERT INTO malacates (Modelo, CCCaP, NumCaP, RPMCaP, IdTipo) 
        VALUES ('$modelo', '$cccp', '$numcap', '$rpmcap', '$tipo')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conn);
        }
        break;
    case '2':
        $modelo = $_POST['modelo'];
        $capacidad = $_POST['capacidad'];
        $sql = "INSERT INTO poleas (Modelo, Capacidad, IdTipo) 
        VALUES ('$modelo', '$capacidad', '$tipo')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conn);
            }
        break;
    case '3':
        $rpm = $_POST['rpm'];
        $carga = $_POST['carga'];
        $litros = $_POST['litros'];
        $cp = $_POST['cp'];
        $sql = "INSERT INTO bombas (RPM, Carga, Litros, CP, IdTipo) 
        VALUES ('$rpm', '$carga', '$litros', '$cp', '$tipo')";
        if (mysqli_query($conn, $sql)) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conn);
        }
        break;

}
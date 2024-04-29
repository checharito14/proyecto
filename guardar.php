
<?php

        require "pages/productos/functions.php";
        $mysqli = connect();

$tipo = $_POST['tipo'];

switch($tipo){
    case '1':
        $modelo = $_POST['modelo'];
        $cccp = $_POST['cccp'];
        $numcap = $_POST['numcap'];
        $rpmcap = $_POST['rpmcap']; 
        $res=$mysqli->query("INSERT INTO malacates (Modelo, CCCaP, NumCaP, RPMCaP, IdTipo) 
        VALUES ('$modelo', '$cccp', '$numcap', '$rpmcap', '$tipo')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        break;
    case '2':
        $modelo = $_POST['modelo'];
        $capacidad = $_POST['capacidad'];
        $res=$mysqli->query("INSERT INTO poleas (Modelo, Capacidad, IdTipo) 
        VALUES ('$modelo', '$capacidad', '$tipo')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
            }
        break;
    case '3':
        $rpm = $_POST['modelo'];
        $carga = $_POST['carga'];
        $litros = $_POST['litros'];
        $cp = $_POST['cp'];
        $res=$mysqli->query("INSERT INTO bombas (Modelo, Carga, Litros, CP, IdTipo) 
        VALUES ('$rpm', '$carga', '$litros', '$cp', '$tipo')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        break;

}
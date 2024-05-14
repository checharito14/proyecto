
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
        $imagen = $_POST['imagen'];
        
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $rutaDestino = 'pages/productos/img_db/' . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        }

        $res=$mysqli->query("INSERT INTO malacates (Modelo, CCCaP, NumCaP, RPMCaP, IdTipo, Imagen_producto) 
        VALUES ('$modelo', '$cccp', '$numcap', '$rpmcap', '$tipo','$imagen')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            window.location.href = 'contenido_administrador.php';
                            </script>";
            
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        break;
    case '2':
        $modelo = $_POST['modelo'];
        $capacidad = $_POST['capacidad'];
        $imagen = $_POST['imagen'];

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $rutaDestino = 'pages/productos/img_db/' . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        }

        $res=$mysqli->query("INSERT INTO poleas (Modelo, Capacidad, IdTipo, Imagen_producto) 
        VALUES ('$modelo', '$capacidad', '$tipo','$imagen')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            window.location.href = 'contenido_administrador.php';
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
            }
        break;
    case '3':
        $rpm = $_POST['modelo'];
        $carga = $_POST['carga'];
        $imagen = $_POST['imagen'];

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $rutaDestino = 'pages/productos/img_db/' . $_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        }

        $res=$mysqli->query("INSERT INTO bombas (Modelo, IdTipo, Imagen_producto) 
        VALUES ('$rpm','$tipo','$imagen')");
        if ($res) {
            echo "<script language='JavaScript'>
                            alert('El producto se agregó correctamente');
                            location.assign('registro.php');
                            window.location.href = 'contenido_administrador.php';   
                            </script>";
        } else {
            echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
        }
        break;

}
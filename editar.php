<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar productos</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="stylesheet" href="css/editar.css">
</head>
        

<?php
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
            $error = ""; 
            require "conexion.php";
?>

            <h1 class="titulo">Editar producto</h1>
            <?php

            if(isset($_POST['Enviar'])){
                switch($tipo){
                    case '1':  /* Malacates */
                        $modelo = $_POST['modelo'];
                        $cccp = $_POST['cccp'];
                        $numcap = $_POST['numcap'];
                        $rpmcap = $_POST['rpmcap'];
        
                        $sql="update malacates set Modelo='".$modelo."', CCCaP='".$cccp."', NumCaP='".$numcap."', RPMCaP='".$rpmcap."' where IdMalacates = $id";
                        $resultado = mysqli_query($conn,$sql);
                        break;
                    case '2': /*Poleas*/
                        $modelo = $_POST['modelo'];
                        $capacidad = $_POST['capacidad'];
        
                        $sql="update poleas set Modelo='".$modelo."', Capacidad='".$capacidad."' where idPoleas = $id";
                        $resultado = mysqli_query($conn,$sql);
                        break;
                    case '3': /*Bombas*/
                        $rpm = $_POST['rpm'];
                        $carga = $_POST['carga']; 
                        $litros = $_POST['litros'];
                        $cp = $_POST['cp'];
                        
                        $sql="update bombas set RPM='".$rpm."', Carga='".$carga."', Litros='".$litros."', CP='".$cp."' where idBombas = $id";
                        $resultado = mysqli_query($conn,$sql);
                        break;
                    }
                    
                    
                if($resultado){
                    echo "<script language='JavaScript'>
                            alert('Los datos se actualizaron correctamente');
                            location.assign('contenido_administrador.php');
                            </script>";
                }else{
                    echo "<script language='JavaScript'>
                    alert('Los datos NO se actualizaron correctamente');
                    location.assign('contenido_administrador.php');
                    </script>";
                }


            }else{
                    switch ($tipo) {
                    case '1':  /* Malacates */
                        $sql = "SELECT * FROM malacates WHERE IdMalacates = $id";  
                        $resultado = mysqli_query($conn,$sql);
                        $fila = mysqli_fetch_assoc($resultado);                      
                        $modelo = $fila['Modelo'];
                        $cccp = $fila['CCCaP'];
                        $numcap = $fila['NumCaP'];
                        $rpmcap = $fila['RPMCaP'];
                        break;
                    case '2':  /* Poleas */
                        $sql = "SELECT * FROM poleas WHERE idPoleas = $id";
                        $resultado = mysqli_query($conn,$sql);
                        $fila = mysqli_fetch_assoc($resultado);
                        $modelo = $fila['Modelo'];
                        $capacidad = $fila['Capacidad'];
                        break;
                    case '3': /*Bombas*/
                        $sql = "SELECT * FROM bombas WHERE idBombas = $id";
                        $resultado = mysqli_query($conn,$sql);
                        $fila = mysqli_fetch_assoc($resultado);
                        $rpm = $fila['RPM'];
                        $carga = $fila['Carga'];
                        $litros = $fila['Litros'];
                        $cp = $fila['CP'];
                        break;
                    }
            }

            switch ($tipo) {
                case '1':  /* Malacates */

                    echo '<form action="' . $_SERVER["PHP_SELF"] . '?id=' . $id . '&tipo=' . $tipo . '" method="POST">';
                            echo '<label>Modelo</label>';
                            echo '<input type="text" name="modelo" value=" '. $modelo . '"><br>';
                            echo '<label>CCCaP</label>';
                            echo '<input type="text" name="cccp" value=" ' . $cccp . ' "><br>';
                            echo '<label>NumCap</label>';
                            echo '<input type="text" name="numcap" value=" ' . $numcap . '"><br>';
                            echo '<label>RPMCap</label>';
                            echo '<input type="text" name="rpmcap" value=" '. $rpmcap . '"><br>';
                            echo '<input type="submit" name="Enviar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '</form>';
                            break;
                case '2':  /* Poleas */
                    echo '<form action="' . $_SERVER["PHP_SELF"] . '?id=' . $id . '&tipo=' . $tipo . '" method="POST">';
                            echo '<label>Modelo</label>';
                            echo '<input type="text" name="modelo" value="' . $modelo . '"><br>';
                            echo '<label>Capacidad</label>';
                            echo '<input type="text" name="capacidad" value=" ' . $capacidad . '"><br>';
                            echo '<input type="submit" name="Enviar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '</form>';
                            break;
                case '3':  /* Bombas */
                    echo '<form action="' . $_SERVER["PHP_SELF"] . '?id=' . $id . '&tipo=' . $tipo . '" method="POST">';
                            echo '<label>RPM</label>';
                            echo '<input type="text" name="rpm" value=" ' . $rpm . '"><br>';
                            echo '<label>Carga</label>';
                            echo '<input type="text" name="carga" value=" ' . $carga . '"><br>';
                            echo '<label>Litros</label>';
                            echo '<input type="text" name="litros" value=" ' . $litros . '"><br>';
                            echo '<label>CP</label>';
                            echo '<input type="text" name="cp" value=" ' . $cp . '"><br>';
                            echo '<input type="submit" name="Enviar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '</form>';
                            break;
                default:
                    $error = "Tipo no válido: $tipo.";
                }

                if ($error) {
                echo "<p class='error'>$error</p>";
                }
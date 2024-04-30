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
            require "pages/productos/functions.php";
            $mysqli = connect();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';
            $error = "";             
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
                        
                        $res=$mysqli->query("update malacates set Modelo='".$modelo."', CCCaP='".$cccp."', NumCaP='".$numcap."', RPMCaP='".$rpmcap."' where IdMalacates = $id");
                        
                        break;
                    case '2': /*Poleas*/
                        $modelo = $_POST['modelo'];
                        $capacidad = $_POST['capacidad'];
        
                        $res=$mysqli->query("update poleas set Modelo='".$modelo."', Capacidad='".$capacidad."'where idPoleas = $id");
                        
                        break;
                    case '3': /*Bombas*/
                        $rpm = $_POST['modelo'];
                        $carga = $_POST['carga']; 
                        $litros = $_POST['litros'];
                        $cp = $_POST['cp'];
                        
                        $res=$mysqli->query("update bombas set Modelo='".$rpm."', Carga='".$carga."', Litros='".$litros."', CP='".$cp."' where idBombas = $id");
                        break;
                    }
                    
                    
                if($res){
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
                        $res = $mysqli->query("SELECT * FROM malacates Where IdMalacates = $id"); 
                        $fila = mysqli_fetch_assoc($res);                      
                        $modelo = $fila['Modelo'];
                        $cccp = $fila['CCCaP'];
                        $numcap = $fila['NumCaP'];
                        $rpmcap = $fila['RPMCaP'];
                        break;
                    case '2':  /* Poleas */
                        $res=$mysqli->query("SELECT * FROM poleas Where idPoleas = $id");
                        $fila = mysqli_fetch_assoc($res);
                        $modelo = $fila['Modelo'];
                        $capacidad = $fila['Capacidad'];
                        break;
                    case '3': /*Bombas*/
                        $res=$mysqli->query("SELECT * FROM bombas Where idBombas = $id");
                        $fila = mysqli_fetch_assoc($res);
                        $rpm = $fila['Modelo'];
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
                            echo '<input type="text" name="modelo" value=" ' . $rpm . '"><br>';
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
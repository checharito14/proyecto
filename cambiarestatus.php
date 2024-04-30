<?php
            $id = $_GET['id'];

            require "pages/productos/functions.php";
            $mysqli = connect();
        
            $error = ""; // Variable para almacenar mensajes de error
            $res = $mysqli->query("SELECT Estatus FROM solicot where IdSolicitud = '$id'");
                $fila = $res->fetch_assoc();
                $dato = $fila["Estatus"];


                if ($dato == 0) {
                    $res = $mysqli->query("update solicot set Estatus='1' where IdSolicitud = '$id'");
                }else{
                    $res = $mysqli->query("update solicot set Estatus='0' where IdSolicitud = '$id'");
                }

                if($res){
                    echo "<script language='JavaScript'>
                            alert('El estatus se cambió correctamente');
                            location.assign('cotizaciones.php');
                            </script>";
                }
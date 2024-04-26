<?php
            $id = $_GET['id'];

            require "conexion.php";
        
            $error = ""; // Variable para almacenar mensajes de error
            $sql = "SELECT Estatus FROM solicot where IdSolicitud = '$id'";
            $resultado = $conn->query($sql);
                $fila = $resultado->fetch_assoc();
                $dato = $fila["Estatus"];


                if ($dato == 0) {
                    $sql="update solicot set Estatus='1' where IdSolicitud = '$id'";
                        $resultado = mysqli_query($conn,$sql);
                }else{
                    $sql="update solicot set Estatus='0' where IdSolicitud = '$id'";
                        $resultado = mysqli_query($conn,$sql);
                }

                if($resultado){
                    echo "<script language='JavaScript'>
                            alert('El estatus se cambió correctamente');
                            location.assign('cotizaciones.php');
                            </script>";
                }
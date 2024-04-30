
<?php
            $id = $_GET['id'];
            $tipo = $_GET['tipo'];

            require "pages/productos/functions.php";
            $mysqli = connect();
        
            
            $error = ""; // Variable para almacenar mensajes de error

                switch ($tipo) {
                case '1':
                    try {
                    $res=$mysqli->query("DELETE FROM `malacates` WHERE `IdMalacates` = $id");
                    header("Location: contenido_administrador.php?mensaje=exito");
                    } catch (Exception $e) {
                    $error = "Error al eliminar registro: " . $e->getMessage();
                    }
                    break;
                case '2':
                        try {
                        $res=$mysqli->query("DELETE FROM `poleas` WHERE `idPoleas` = $id");
                        header("Location: contenido_administrador.php?mensaje=exito");
                        } catch (Exception $e) {
                        $error = "Error al eliminar registro: " . $e->getMessage();
                        }
                        break;
                case '3':
                    try {
                    $res=$mysqli->query("DELETE FROM `bombas` WHERE `idBombas` = $id");
                    header("Location: contenido_administrador.php?mensaje=exito");
                    } catch (Exception $e) {
                    $error = "Error al eliminar registro: " . $e->getMessage();
                    }                
                    break;
                default:
                    $error = "Tipo no válido: $tipo. Eliminación no realizada.";
                }

                if ($error) {
                echo "<p class='error'>$error</p>";
                }
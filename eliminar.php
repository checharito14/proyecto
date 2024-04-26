
<?php
            $id = $_GET['id'];
            $tipo = $_GET['tipo'];

            require "conexion.php";
        
            
            $error = ""; // Variable para almacenar mensajes de error

                switch ($tipo) {
                case '1':
                    try {
                    $sql = "DELETE FROM `malacates` WHERE `IdMalacates` = $id";
                    $conn->query($sql);
                    header("Location: contenido_administrador.php?mensaje=exito");
                    } catch (Exception $e) {
                    $error = "Error al eliminar registro: " . $e->getMessage();
                    }
                    break;
                case '2':
                        try {
                        $sql = "DELETE FROM `poleas` WHERE `idPoleas` = $id";
                        $conn->query($sql);
                        header("Location: contenido_administrador.php?mensaje=exito");
                        } catch (Exception $e) {
                        $error = "Error al eliminar registro: " . $e->getMessage();
                        }
                        break;
                case '3':
                    try {
                    $sql = "DELETE FROM `bombas` WHERE `idBombas` = $id";
                    $conn->query($sql);
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
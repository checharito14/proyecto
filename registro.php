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
    <link rel="icon" type="image/x-icon" href="images/logo.rice.ico">
</head>
<body>
    <h1 class="titulo">Agregar nuevo producto</h1>
    <label>Selecciona el tipo de producto</label>

    <form method="post" action="">
        <input type="radio" name="op" value="1">Malacate
        <input type="radio" name="op" value="2">Polea
        <input type="radio" name="op" value="3">Bomba
        <button type="submit" name="pro" value="pro">Seleccionar</button>
    </form>

</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['op'])) {
            $op = $_POST['op'];
            switch ($op) {
                case "1":
                    echo '<form action="guardar.php"method="POST" enctype="multipart/form-data">';
                            echo '<label>Modelo</label>';
                            echo '<input type="text" name="modelo" value="" required ><br>';
                            echo '<label>CCCaP</label>';
                            echo '<input type="text" name="cccp" value="" required ><br>';
                            echo '<label>NumCap</label>';
                            echo '<input type="text" name="numcap" value="" required><br>';
                            echo '<label>RPMCap</label>';
                            echo '<input type="text" name="rpmcap" value="" required><br>';
                            echo '<label for="image">Selecciona una imagen:</label><br>
                            <input type="file" id="imagen" name="imagen" accept=".png"><br>';
                            echo '<input type="submit" name="Agregar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '<input type="hidden" name=tipo value="1" >';
                            echo '</form>';

                            
                    break;
                case "2":
                    echo '<form action="guardar.php" method="POST" enctype="multipart/form-data">';
                            echo '<label>Modelo</label>';
                            echo '<input type="text" name="modelo" value="" required><br>';
                            echo '<label>Capacidad</label>';
                            echo '<input type="text" name="capacidad" value="" required><br>';
                            echo '<label for="image">Selecciona una imagen:</label><br>
                            <input type="file" id="imagen" name="imagen" accept=".png"><br>';
                            echo '<input type="submit" name="Enviar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '<input type="hidden" name=tipo value="2" >';
                            echo '</form>';
                            break;
                case "3":
                    echo '<form action="guardar.php" method="POST" enctype="multipart/form-data">';
                            echo '<label>Modelo</label>';
                            echo '<input type="text" name="modelo" value="" required><br>';
                            echo '<label for="image">Selecciona una imagen:</label><br>
                            <input type="file" id="imagen" name="imagen" accept=".png"><br>';
                            echo '<input type="submit" name="Enviar" value="Enviar" class="boton">';
                            echo '<a href="contenido_administrador.php" class="boton-regresar">Regresar</a>';
                            echo '<input type="hidden" name=tipo value="3">';
                            echo '</form>';
                            break;
                default:
                    echo "Seleccione una opción";
            }
        } else {
            echo "Seleccione una opción";
        }
    }
?>

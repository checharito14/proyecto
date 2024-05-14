<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos Industriales de Mazatlan | Contacto</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="images/logo.rice.ico">
</head>
<?php
// Verificar si hay un mensaje de error en la URL
if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'error') {
    echo '<p style="color: red;">Usuario o contraseña incorrecta</p>';
}
?>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 50vh;">
        <form action="verificar.php" method="POST" class="w-50" style="margin: 0 auto;"> 
                    <p style="color: #fff;"><small>Completa todos los campos *</small></p>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating">
                                <input class="form-control mb-3 form-control-lg" type="text" name="usuario" id="usuario"  placeholder="usuario" required>
                                <label for="usuario">Usuario</label>

                            </div>

                            <div class="form-floating">
                                <input class="form-control {valid|invalid}-tooltip mb-3 form-control-lg" type="password" name= "password" id="password" placeholder="password" required>
                                <label for="password">Contraseña</label>
                                <div id = "password" class="invalid-tooltip">
                                Por favor, ingresa una contraseña válida.
                                </div>
                            </div>

                        <div class="d-grid gap-2 d-md-block mt-3"> <!-- Ajuste de margen superior -->
                            <button class="btn btn-success btn-lg" type="submit">Enviar</button>

                        </div>
</div>
                </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
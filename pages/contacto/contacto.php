<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos Industriales de Mazatlan | Contacto</title>

    <link rel="stylesheet" href="../../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="fontawesome/fontawesome-free-6.5.1-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="../../images/logo.rice.ico">
</head>

<body>
    <?php require "../../assets/navbar/navbar.php" ?>
    <?php
// Verificar si hay un mensaje de éxito en la URL
if(isset($_GET['mensaje']) && $_GET['mensaje'] == 'exito') {
    echo '<p style="color: green;">Guardado con éxito!</p>';
}
?>
    <div class="fondo">
        <main>

            <div class="container">
                <div class="box-info">
                    <h1>CONTACTATE <br>CON<br> NOSOTROS</h1>
                    <div class="links">

                        <p><i class="fa-solid fa-location-dot" style="color: red;"></i>Calzada Gabriel Leyva # 2116, Mazatlán Sinaloa México</p>
                        <p><i class="fa-solid fa-phone" style="color: blue;"></i>(669) 982-17-64 , 981-33-65</p>
                        <p><i class="fa-brands fa-whatsapp" style="color: green;"></i>+52 (669)227-33-53</p>
                        <p><i class="fa-solid fa-envelope" style="color: white;"></i>maxi@red2000.com.mx</p>
                    </div>
                </div>
            </div>

            <form action="send.php" method="POST"> <!-- en action se agrega el archivo que va a guardar los datos en la bdd -->
                <p style="color: #fff;"><small>Completa todos los campos *</small></p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input class="form-control mb-3 form-control-lg" type="text" name="nombre" id="nombre"  placeholder="Nombre" required>
                            <label for="nombre">Nombre</label>

                        </div>

                        <div class="form-floating">
                            <input class="form-control {valid|invalid}-tooltip mb-3 form-control-lg" type="email" name= "email" id="email" placeholder="Email" required>
                            <label for="email">Email</label>
                            <div id="email" class="invalid-tooltip">
                                Ingresa un email valido
                            </div>
                        </div>


                        <div class="form-floating">
                            <input class="form-control mb-3 form-control-lg" type="tel"  name = "telefono" id="telefono" pattern="[0-9]{10}" placeholder="Telefono" maxlength="10" required>
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control mb-3 form-control-lg" type="text" name = "pais" id="pais"  placeholder="Pais" required>
                            <label for="pais">Pais</label>
                        </div>

                        <div class="form-floating">
                            <input class="form-control mb-3 form-control-lg" type="text" name = "ciudad" id="ciudad"  placeholder="Ciudad" required>
                            <label for="ciudad">Ciudad</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" name = "mensaje" id="mensaje" placeholder="comentarios" style="height: 350px"></textarea>
                            <label for="mensaje">Comentarios</label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block  offset-center">
                        <button class="btn btn-success btn-lg" type="submit">Enviar</button>
                        <button type="reset" class="btn btn-danger btn-lg">Cancelar</button>

                    </div>
            </form>
        </main>
    </div>

    <?php require "../../assets/footer/footer.php" ?>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>



</html>
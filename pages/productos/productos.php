<?php
require "../../assets/navbar/navbar.php";
require "../../assets/footer/footer.php";
include "index.php";
?>
<!DOCTYPE html>;
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winches Rice | Equipos Industriales de Mazatlan | Productos</title>

    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/productos.css"> -->
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
    <link rel="stylesheet" href="pag-productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo">.</h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button id="todosProductos" class="boton-menu boton-categoria active">Todos los productos</button>
                    </li>
                    <li>
                        <button id="malacates" class="boton-categoria ">Malacates</button>
                    </li>
                    <li>
                        <button id="bombas" class="boton-categoria ">Bombas</button>
                    </li>
                    <li>
                        <button id="poleas" class="boton-categoria ">Poleas</button>
                    </li>
                </ul>
            </nav>

            <p class="texto-footer">.</p>

        </aside>

        <main>

            <div class="container-titulo">

                <h2 id="titulo-principal" class="titulo-principal">Todos los productos</h2>
                <!-- MODAL DE BOTON ESPECIFICACIONES -->
                <button class="btn-modal">Especificaciones tecnicas</button>
                <dialog id="modal">
                    <img src="../../images/especificaciones/especificaciones_malacates.png" alt="Especificaciones malacates">
                </dialog>
            </div>

            <div id="contenedor-productos" class="contenedor-productos">

                <?php
                $products = getAllProducts();
                foreach ($products as $product) {
                ?>
                    <div class="producto">
                        <img class="producto-imagen" src="img_db/<?php echo $product["Imagen_producto"] ?>" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">Malacate: <?php echo $product["Modelo"]; ?></h3>


                            <!-- INICIO DEL MODAL DE EL BOTON DE COTIZACION   -->
                            <button class="producto-mas-info btn-abrir-modal-coti" id="btn-abrir-modal-coti" data-product-name="<?php echo $product['Modelo'];?>">Solicitar cotizacion</button>
                            <dialog id="modal-coti">

                                <form action="solicot.php" method="dialog">
                                    <h3 style="text-align:center">Producto a cotizar: <?php echo $product["Modelo"] ?></h3>
                                    <p style="color: black;"><small>Completa todos los campos *</small></p>
                                    <div class="row">
                                        <!-- Primera columna -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <!-- Primer campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input class="form-control mb-3 form-control-lg" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                                                        <label for="nombre">Nombre</label>
                                                    </div>
                                                </div>
                                                <!-- Segundo campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input class="form-control mb-3 form-control-lg" type="email" name="email" id="email" placeholder="Email" required>
                                                        <label for="email">Email</label>
                                                        <div id="email" class="invalid-tooltip">Ingresa un email valido</div>
                                                    </div>
                                                </div>
                                                <!-- Tercer campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input class="form-control mb-3 form-control-lg" type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" placeholder="Telefono" maxlength="10" required>
                                                        <label for="telefono">Telefono</label>
                                                    </div>
                                                </div>
                                                <!-- Cuarto campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input class="form-control mb-3 form-control-lg" type="text" name="pais" id="pais" placeholder="Pais" required>
                                                        <label for="pais">Pais</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Segunda columna -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <!-- Quinto campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <input class="form-control mb-3 form-control-lg" type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required>
                                                        <label for="ciudad">Ciudad</label>
                                                    </div>
                                                </div>
                                                <!-- Sexto campo -->
                                                <div class="col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" name="mensaje" id="mensaje" placeholder="comentarios" style="height: 220px"></textarea>
                                                        <label for="mensaje">Comentarios</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-grid gap-2 d-md-block offset-center">
                                        <button type="submit" class="btn btn-success btn-lg" >Enviar</button>
                                        <button type="reset" class="btn btn-danger btn-lg">Cancelar</button>
                                    </div>
                                </form>

                            </dialog>
                        </div>
                    </div>


                <?php
                }
                ?>
            </div>

        </main>
    </div>

    <script src="mostrar-productos.js"></script>
    <script src="modal-especificaciones.js"></script>
    <script src="titulo-categorias.js"></script>
    <script src="modal-cotizaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
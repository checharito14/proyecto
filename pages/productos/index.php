<?php

require "functions.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    switch ($id) {
        case 'todosProductos':
            $products = getAllProducts();
            break;
        case "malacates":
            $products = getMalacates();
            break;
        case "bombas":
            $products = getBombas();
            break;
        case "poleas":
            $products = getPoleas();
            break;
        default:
            echo "ID de categoría inválido";
            exit;
    }

    foreach ($products as $product) {
        echo '<div class="producto">
    <img class="producto-imagen" src="img_db/' . $product["Imagen_producto"] . '" alt="">
    <div class="producto-detalles">
        <h3 class="producto-titulo">Modelo: ' . $product["Modelo"] . '</h3>

        <!-- INICIO DEL MODAL DE EL BOTON DE COTIZACION -->
        <button class="producto-mas-info btn-abrir-modal-coti" id="btn-abrir-modal-coti" data-product-name="' . $product['Modelo'] . '">Solicitar cotización</button>
        <dialog id="modal-coti">
            <form action="solicot.php" method="dialog">
                <h3 style="text-align:center">Producto a cotizar: ' . $product["Modelo"] . '</h3>
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
                                    <div id="email" class="invalid-tooltip">Ingresa un email válido</div>
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
                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                    <button type="reset" class="btn btn-danger btn-lg" id="cerrar">Cancelar</button>
                </div>
            </form>
        </dialog>
    </div>
</div>';
    }
}

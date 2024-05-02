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


        echo '<div class="producto">';
        echo '<img class="producto-imagen" src="img_db/' . $product["Imagen_producto"] . '" alt="">';
        echo '<div class="producto-detalles">';
        echo '<h3 class="producto-titulo"> ' . $product["Modelo"] . '</h3>';
        echo '<button class="producto-mas-info btn-abrir-modal-coti" id="btn-abrir-modal-coti">Solicitar cotizacion</button>
        <dialog id="modal-coti">';
        echo '<form action="send.php" method="dialog">';
echo '<h3 style="text-align:center">Producto a cotizar: ' . $product["Modelo"] . '</h3>';
echo '<p style="color: black;"><small>Completa todos los campos *</small></p>';
echo '<div class="row">';
echo '<div class="col-md-6">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<input class="form-control mb-3 form-control-lg" type="text" name="nombre" id="nombre" placeholder="Nombre" required>';
echo '<label for="nombre">Nombre</label>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<input class="form-control mb-3 form-control-lg" type="email" name="email" id="email" placeholder="Email" required>';
echo '<label for="email">Email</label>';
echo '<div id="email" class="invalid-tooltip">Ingresa un email valido</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<input class="form-control mb-3 form-control-lg" type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" placeholder="Telefono" maxlength="10" required>';
echo '<label for="telefono">Telefono</label>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<input class="form-control mb-3 form-control-lg" type="text" name="pais" id="pais" placeholder="Pais" required>';
echo '<label for="pais">Pais</label>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-md-6">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<input class="form-control mb-3 form-control-lg" type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required>';
echo '<label for="ciudad">Ciudad</label>';
echo '</div>';
echo '</div>';
echo '<div class="col-12">';
echo '<div class="form-floating">';
echo '<textarea class="form-control" name="mensaje" id="mensaje" placeholder="comentarios" style="height: 220px"></textarea>';
echo '<label for="mensaje">Comentarios</label>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="d-grid gap-2 d-md-block offset-center">';
echo '<button class="btn btn-success btn-lg" type="submit">Enviar</button>';
echo '<button type="reset" class="btn btn-danger btn-lg">Cancelar</button>';
echo '</div>';
echo '</form>';
        echo '</div>';
        echo '</div>';
    }
} 

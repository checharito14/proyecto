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
        echo '</div>';
        echo '</div>';
    }
} 

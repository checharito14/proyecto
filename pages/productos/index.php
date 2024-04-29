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
        echo '<img class="producto-imagen" src="../../images/winche_chiquito_correcto.jpg/winche_chiquito.jpg" alt="">';
        echo '<div class="producto-detalles">';
        echo '<h3 class="producto-titulo"> ' . $product["Modelo"] . '</h3>';
        echo '<button class="producto-mas-info">Solicitar cotizacion</button>';
        echo '</div>';
        echo '</div>';
    }
} 

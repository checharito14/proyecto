<?php require "../../assets/navbar/navbar.php" ?>
<?php require "../../assets/footer/footer.php" ?>
<?php 
    require "conexion_productos/conexion_db.php";
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT modelo FROM malacates;");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
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
                        <button class="boton-menu boton-categoria active">Todos los productos</button>
                    </li>
                    <li>
                        <button class="boton-categoria">Malacates</button>
                    </li>
                    <li>
                        <button class="boton-categoria">Bombas</button>
                    </li>
                    <li>
                        <button class="boton-categoria">Poleas</button>
                    </li>
                </ul>
            </nav>

            <p class="texto-footer">.</p>

        </aside>

        <main>
            <h2 class="titulo-principal">Todos los productos</h2>
            <h2 class="especificaciones">Especificaciones tecnicas</h2>
       
            <div id="contenedor-productos" class="contenedor-productos">

                <?php foreach( $resultado as $row ) { ?>
                <div class="producto">
                    <img class="producto-imagen" src="../../images/winche_chiquito_correcto.jpg/winche_chiquito.jpg" alt="">
                    <div class="producto-detalles">
                        <h3 class="producto-titulo"><?php echo $row["modelo"]; ?></h3>
                        <!-- <p class="producto-precio">$1000</p> -->
                        <button class="producto-mas-info">Mas informacion</button>
                    </div>
                </div>
                <?php } ?>

        </main>
    </div>

    <script src="botones-categorias.js"></script>
</body>

</html>
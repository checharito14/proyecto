<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- <link rel="stylesheet" href="../../css/normalize.css"> -->
    <link rel="stylesheet" href="../../assets/navbar/navbar.css">
    <link rel="stylesheet" href="../../assets/whatsapp/whatsapp.css">
    <link rel="icon" type="image/x-icon" href="../../images/logo.rice.ico">


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verifica si hay un fragmento en la URL
            if (window.location.hash) {
                // Obtiene el ID del fragmento
                var target = document.querySelector(window.location.hash);
                if (target) {
                    // Desplaza suavemente a la sección
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>

</head>

<body>

    <header>


        <div class="menu-bar">

            <div class="logo">
                <a href="../index/index.php"><img src="../../images/logo.rice.png" alt="Logo Rice"></a>
            </div>

            <nav>
                <ul class="nav-links">
                    <li><a href="../index/index.php">Inicio</a></li>
                    <li><a href="../index/index.php#historia">Historia</a></li>
                    <li><a href="../productos/productos.php">Productos</a></li>
                    <li><a href="../galeria/galeria.php">Galeria</a></li>
                </ul>
            </nav>
            <a href="../contacto/contacto.php" class="btn-nav"><button>Contacto</button></a>

        </div>

    </header>

    <?php require "../../assets/whatsapp/whatsapp.php" ?>
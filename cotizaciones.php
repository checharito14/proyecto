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
    <link rel="stylesheet" href="css/style.css">
</head>
        
<body>
    <div class="container-fluid">
        <h1 class="titulo">Administrar cotizaciones</h1>
        <a href="contenido_administrador.php" class="btn btn-primary" style="text-align: left; display: inline-block;">Regresar</a>
        <?php
            require "pages/productos/functions.php";
            $mysqli = connect();

            $res=$mysqli->query("SELECT 
            CASE 
                WHEN solicot.IdTipo = 1 THEN malacates.Modelo
                WHEN solicot.IdTipo = 2 THEN poleas.Modelo
                WHEN solicot.IdTipo = 3 THEN bombas.Modelo
                ELSE 'Producto Desconocido' 
            END AS ProductoACotizar,
            CASE 
                WHEN solicot.IdTipo = 1 THEN 'Malacate'
                WHEN solicot.IdTipo = 2 THEN 'Polea'
                WHEN solicot.IdTipo = 3 THEN 'Bomba'
                ELSE 'Tipo Desconocido' 
            END AS TipoProducto, 
            infocontacto.nombre AS Nombre,
            infocontacto.email AS Email,
            infocontacto.telefono AS Telefono,
            FechaSolicitud,
            IdSolicitud,
            CASE 
                WHEN solicot.estatus = 0 THEN 'Pendiente'
                ELSE 'Revisado' 
            END AS Estatus
                FROM solicot 
                LEFT JOIN malacates ON solicot.IdProducto= malacates.IdMalacates 
                LEFT JOIN bombas ON solicot.IdProducto = bombas.idBombas
                LEFT JOIN poleas ON solicot.IdProducto = poleas.idPoleas
                LEFT JOIN infocontacto ON solicot.idcontacto = infocontacto.idcontacto");

            echo "<table class='table-style'>";
            echo "<tr>
                    <th>Producto a cotizar</th>
                    <th>Tipo de producto</th>
                    <th>Nombre del cliente</th>
                    <th>Email del cliente</th>
                    <th>Telefono</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>";
            while ($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ProductoACotizar'] . "</td>";
                echo "<td>" . $row['TipoProducto'] . "</td>";
                echo "<td>" . $row['Nombre'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Telefono'] . "</td>";
                echo "<td>" . $row['FechaSolicitud'] . "</td>";
                echo "<td>" . $row['Estatus'] . "</td>";
                echo "<td><a href='cambiarestatus.php?id=" . $row['IdSolicitud'] . "' class='btn btn-warning'>Cambiar estatus</a></td>";
                echo "</tr>";
            }
            echo "</table>";
    ?>
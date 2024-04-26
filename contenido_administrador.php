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
        <h1 class="titulo">Administrar productos</h1>
        <a href="registro.php" class="btn btn-primary" style="text-align: left; display: inline-block;">Registrar nuevo producto</a>
        <a href="cotizaciones.php" class="btn btn-primary" style="text-align: left; display: inline-block;">Administrar cotizaciones</a>


        <h2 class="titulo">Malacates</h2>

        <?php
            require "conexion.php";
        
              $sql = "SELECT * FROM malacates";
                $result = $conn->query($sql);

                echo "<table class='table-style'>";
                echo "<tr>
                        <th>Id</th>
                        <th>Modelo</th>
                        <th>Capacidad de carga de carretes principales</th>
                        <th>Número de carretes principales</th>
                        <th>R.P.M. Carretes principales</th>
                        <th>Acciones</th> <!-- Encabezado para las acciones -->
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['IdMalacates'] . "</td>";
                    echo "<td>" . $row['Modelo'] . "</td>";
                    echo "<td>" . $row['CCCaP'] . "</td>";
                    echo "<td>" . $row['NumCaP'] . "</td>";
                    echo "<td>" . $row['RPMCaP'] . "</td>";
                    echo "<td>
                    <a href='eliminar.php?id=" . $row['IdMalacates'] . "&tipo=1' class='btn btn-danger' onclick='return confirmarEliminar();'>Eliminar</a>
                    <a href='editar.php?id=" . $row['IdMalacates'] . "&tipo=1' class='btn btn-warning'>Editar</a>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
        ?>
        <script>
            function confirmarEliminar() {
                return confirm('¿Estás seguro de que quieres eliminar este producto?');
            }
        </script>

        <h2 class="titulo">Bombas</h2>
        
        <?php
        $sql = "SELECT * FROM bombas";
                $result = $conn->query($sql);

                echo "<table class='table-style'>";
                echo "<tr>
                        <th>Id</th>
                        <th>RPM</th>
                        <th>Carga</th>
                        <th>Lts./min.</th>
                        <th>C.P.</th>
                        <th>Acciones</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['idBombas'] . "</td>";
                    echo "<td>" . $row['RPM'] . "</td>";
                    echo "<td>" . $row['Carga'] . "</td>";
                    echo "<td>" . $row['Litros'] . "</td>";
                    echo "<td>" . $row['CP'] . "</td>";
                    echo "<td>
                    <a href='eliminar.php?id=" . $row['idBombas'] . "&tipo=3' class='btn btn-danger' onclick='return confirmarEliminar();'>Eliminar</a>
                    <a href='editar.php?id=" . $row['idBombas'] . "&tipo=3' class='btn btn-warning'>Editar</a>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
        ?>

<h2 class="titulo">Poleas</h2>
        
        <?php
        $sql = "SELECT * FROM poleas";
                $result = $conn->query($sql);

                echo "<table class='table-style'>";
                echo "<tr>
                        <th>Id</th>
                        <th>Modelo</th>
                        <th>Capacidad</th>
                        <th>Acciones</th>
                    </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['idPoleas'] . "</td>";
                    echo "<td>" . $row['Modelo'] . "</td>";
                    echo "<td>" . $row['Capacidad'] . "</td>";
                    echo "<td>
                    <a href='eliminar.php?id=" . $row['idPoleas'] . "&tipo=2' class='btn btn-danger' onclick='return confirmarEliminar();'>Eliminar</a>
                    <a href='editar.php?id=" . $row['idPoleas'] . "&tipo=2' class='btn btn-warning'>Editar</a>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
        ?>

<?php
$conn->close();
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<?php
        if (isset($_GET['mensaje']) && $_GET['mensaje'] == "exito") {
        echo "<script>alert('Registro eliminado correctamente');</script>";
        }
        ?>

</html>
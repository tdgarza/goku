<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .jumbotron {
            background-color: #e9ecef;
            padding: 30px;
            border-radius: 10px;
        }
        .pokemon-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .pokemon-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .pokemon-card h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }
        .pokemon-card p {
            margin: 5px 0;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">Agenda</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>

        <div class="pokemon-container">
            <?php
            // Configuración de la conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pokemon";
        
            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Verificar la conexión
            if ($conn->connect_error) {
                die("La conexión a la base de datos falló: " . $conn->connect_error);
            }
        
            // Consulta SQL para obtener datos de la tabla
            $sql = "SELECT * FROM Pokemon";
            $result = $conn->query($sql);
        
            // Mostrar los datos en tarjetas
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='pokemon-card'>";
                    echo "<h3>" . $row["Nombre"] . "</h3>";
                    echo "<p>ID: " . $row["Id"] . "</p>";
                    echo "<p>Poder: " . $row["Poder"] . "</p>";
                    echo "<p>Teléfono: " . $row["telefono"] . "</p>";
                    echo "<p>Dirección: " . $row["direccion"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No se encontraron registros en la agenda.</p>";
            }
        
            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

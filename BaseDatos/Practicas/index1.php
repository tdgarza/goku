<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <title>Tablas MySql</title>
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
  
      // Mostrar los datos en una tabla
      if ($result->num_rows > 0) {
          echo "<table>";
          echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo Electrónico</th><th>Teléfono</th></tr>";
          while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Poder"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["direccion"] . "</td></tr>";
          }
          echo "</table>";
      } else {
          echo "No se encontraron registros en la agenda.";
      }
  
      // Cerrar la conexión a la base de datos
      $conn->close();
      ?>

      </div>
      


</body>
</html>

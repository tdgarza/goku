<?php
     // Configuración de la conexión a la base de datos
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "lunes";
 
     // Crear conexión
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     // Verificar la conexión
     if ($conn->connect_error) {
         die("La conexión a la base de datos falló: " . $conn->connect_error);
     }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados desde el formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["nacimiento"];
 
    // Consulta SQL para insertar una nueva persona en la tabla
    $sql = "INSERT INTO martes (nombre, apellido, nacimiento) VALUES ('$nombre', '$apellido', '$nacimiento')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Nueva persona agregada con éxito.";
    } else {
        echo "Error al agregar la persona: " . $conn->error;
    }
}
    ?>
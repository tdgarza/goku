<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "marvel";
 
     // Crear conexión
     $conn = new mysqli($servername, $username, $password, $dbname);
 
     // Verificar la conexión
     if ($conn->connect_error) {
         die("La conexión a la base de datos falló: " . $conn->connect_error);

// Obtener los datos del formulario
$nombre = $_POST['Nombre'];
$alias = $_POST['Alias'];
$fecha_creacion = $_POST['FechaDeCreacion'];
$descripcion = $_POST['Descripcion'];

$comic_titulo = $_POST['Titulo'];
$aniopublicacion = $_POST['AnioPublicacion'];
$descripcion2 = $_POST['Descripcion'];

$superpoder_nombre = $_POST['Nombre'];
$descripcion3 = $_POST['Descripcion'];

$comic_id = $_POST['ComicID'];

$superheroe_id = $_POST['PersonajeID'];
$comic_id = $_POST['SuperpoderID'];

// Insertar datos en la tabla de Superhéroes
$insert_superheroe = "INSERT INTO Personajes (Nombre, Alias, FechaDeCreacion, Descripcion) VALUES ('$nombre', '$alias', '$fecha_creacion', '$descripcion')";
if ($conexion->query($insert_superheroe) === TRUE) {
    $superheroe_id = $conexion->insert_id; // Obtener el ID del nuevo superhéroe
} else {
    echo "Error al insertar datos del superhéroe: " . $conexion->error;
}

// Insertar datos en la tabla de Cómics
$insert_comic = "INSERT INTO Comics (Titulo, AnioPublicacion, Descripcion) VALUES ('$comic_titulo','$aniopublicacion','$descripcion2')";
if ($conexion->query($insert_comic) === TRUE) {
    $comic_id = $conexion->insert_id; // Obtener el ID del nuevo cómic
} else {
    echo "Error al insertar datos del cómic: " . $conexion->error;
}

// Insertar datos en la tabla de Superpoderes
$insert_superpoder = "INSERT INTO Superpoderes (Nombre, Descripcion) VALUES ('$superpoder_nombre','$descripcion3')";
if ($conexion->query($insert_superpoder) === TRUE) {
    $superpoder_id = $conexion->insert_id; // Obtener el ID del nuevo superpoder
} else {
    echo "Error al insertar datos del superpoder: " . $conexion->error;
}

// Relacionar Superhéroes con Cómics
$insert_relacion_comic = "INSERT INTO PersonajeComic (PersonajeID, ComicID) VALUES ($superheroe_id, $comic_id)";
if ($conexion->query($insert_relacion_comic) !== TRUE) {
    echo "Error al relacionar superhéroe con cómic: " . $conexion->error;
}

// Relacionar Superhéroes con Superpoderes
$insert_relacion_superpoder = "INSERT INTO PersonajeSuperpoder (PersonajeID, SuperpoderID) VALUES ($superheroe_id, $superpoder_id)";
if ($conn->query($insert_relacion_superpoder) !== TRUE) {
    echo "Error al relacionar superhéroe con superpoder: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();

// Redirigir a una página de éxito o mostrar un mensaje de éxito
echo "Datos guardados con éxito.";
}
}
?>
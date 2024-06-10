<?php



// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $alias = $_POST['alias'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $descripcion = $_POST['descripcion'];
    
    $comic_titulo = $_POST['titulo'];
    $aniopublicacion = $_POST['aniopublicacion'];
    $descripcion1 = $_POST['descripcion1'];
 
    $superpoder_nombre = $_POST['superpoder_nombre'];
    $descripcion2 = $_POST['descripcion2'];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "marvel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

// Insertar datos en la tabla de Superhéroes
$insert_superheroe = "INSERT INTO Personajes (Nombre, Alias, FechaDeCreacion, Descripcion) VALUES ('$nombre', '$alias', '$fecha_creacion', '$descripcion')";
if ($conn->query($insert_superheroe) === TRUE) {
    $superheroe_id = $conn->insert_id; // Obtener el ID del nuevo superhéroe

    // Insertar datos en la tabla de Cómics
$insert_comic = "INSERT INTO Comics (Titulo, AnioPublicacion, Descripcion) VALUES ('$comic_titulo', $aniopublicacion, '$descripcion1')";
if ($conn->query($insert_comic) === TRUE) {
$comic_id = $conn->insert_id; // Obtener el ID del nuevo cómic

// Insertar datos en la tabla de Superpoderes
$insert_superpoder = "INSERT INTO Superpoderes (Nombre, Descripcion) VALUES ('$superpoder_nombre', '$descripcion2')";
if ($conn->query($insert_superpoder) === TRUE) {
    $superpoder_id = $conn->insert_id; // Obtener el ID del nuevo superpoder

    // Relacionar Superhéroes con Cómics
$insert_relacion_comic = "INSERT INTO PersonajeComic (PersonajeID, ComicID) VALUES ($superheroe_id, $comic_id)";
if ($conn->query($insert_relacion_comic) !== TRUE) {
echo "Error al relacionar superhéroe con cómic: " . $conn->error;
    }
// Relacionar Superhéroes con Superpoderes
$insert_relacion_superpoder = "INSERT INTO PersonajeSuperpoder (PersonajeID, SuperpoderID) VALUES ($superheroe_id, $superpoder_id)";
if ($conn->query($insert_relacion_superpoder) !== TRUE) {
echo "Error al relacionar superhéroe con superpoder: " . $conn->error;
            }
        }
    }
} else {
    echo "Error al insertar datos del superhéroe: " . $conexion->error;
}
    // Cerrar la conexión a la base de datos
    $conn->close();
    // Redirigir a una página de éxito
    header("Location: relaciones.php");
    exit; // Salir del script después de la redirección
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos (ajusta estos valores según tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pokemon1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];

    // Consulta para insertar el tipo de Pokémon en la tabla de TiposPokemon si no existe
    $insertTipoSQL = "INSERT INTO TiposPokemon (Tipo) VALUES ('$tipo')";
    $conn->query($insertTipoSQL); // Esto evita duplicados

    // Obtener el ID del tipo insertado
    $tipoID = $conn->insert_id;

    // Insertar datos en la tabla de Pokémon con el ID del tipo
    $insertPokemonSQL = "INSERT INTO Pokemon (Nombre, Altura, Peso, Descripcion, TipoID) 
                          VALUES ('$nombre', $altura, $peso, '$descripcion', $tipoID)";

    if ($conn->query($insertPokemonSQL) === TRUE) {
        // Redirigir al usuario a la página de lista de Pokémon
        header("Location: mostrar_pokemon.php");
    } else {
        echo "Error: " . $insertPokemonSQL . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>

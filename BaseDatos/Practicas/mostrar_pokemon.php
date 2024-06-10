<?php
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

// Consulta para seleccionar todos los Pokémon
$sql = "SELECT p.Nombre, p.Altura, p.Peso, p.Descripcion, t.Tipo
        FROM Pokemon p
        INNER JOIN TiposPokemon t ON p.TipoID = t.TipoID";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pokémon</title>
    <link rel="stylesheet" type="text/css" href="pokemon.css"> <!-- Incluye tu archivo CSS aquí -->
</head>
<body>
    <h1>Lista de Pokémon</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Descripción</th>
            <th>Tipo</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Altura"] . "</td>";
                echo "<td>" . $row["Peso"] . "</td>";
                echo "<td>" . $row["Descripcion"] . "</td>";
                echo "<td>" . $row["Tipo"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron Pokémon.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>

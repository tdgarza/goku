<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Personajes de Marvel</title>
    <style>
        body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #1f1f1f;
    color: #FFFFFF;
    margin: 0;
}

.container {
    width: 80%;
    margin: auto;
}

h1 {
    color: #ff6600;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #f6a700;
}

th {
    background-color: #1f1f1f;
    color: #f6a700;
}

form {
    width: 50%;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #f6a700;
}

input[type="text"],
input[type="date"],
textarea {
    width: 60%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #f6a700;
    border-radius: 5px;
    background-color: #1f1f1f;
    color: yellow;
}

input[type="submit"] {
    background-color: #f6a700;
    color: #000;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="hidden"] {
    display: none;
}

#mensaje {
    margin-top: 15px;
    padding: 10px;
    border-radius: 5px;
}

body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background: url('gambit.jpg') center/cover no-repeat;
    opacity: 0.3;
}

    </style>
</head>
<body>
    <h1>Personajes de Marvel</h1>

    <h2>Personajes</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Alias</th>
            <th>Fecha de Creación</th>
            <th>Descripción</th>
            <th>ComicID</th>
            <th>Titulo del Comic</th>
            <th>Superpoder ID</th>
            <th>Nombre del superpoder</th>

        </tr>

        <?php
        // Realizar la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "marvel";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    //verifica coneccion
    if($conn-> connect_error){
        die("La conexion a la base de datos fallo: " .$conn->connect_error);
        }

        // Consulta SQL para recuperar datos y relaciones
        $sql = "SELECT
        p.PersonajeID AS PersonajeID,
        p.Nombre AS NombreDelSuperheroe,
        p.Alias AS AliasDelSuperheroe,
        p.FechaDeCreacion AS FechaDeCreacionDelSuperheroe,
        p.Descripcion AS DescripcionDelSuperheroe,
        c.ComicID AS ComicID,
        c.Titulo AS TituloDelComic,
        s.SuperpoderID AS SuperpoderID,
        s.Nombre AS NombreDelSuperpoder
    FROM Personajes p
    LEFT JOIN PersonajeComic pc ON p.PersonajeID = pc.PersonajeID
    LEFT JOIN Comics c ON pc.ComicID = c.ComicID
    LEFT JOIN PersonajeSuperpoder ps ON p.PersonajeID = ps.PersonajeID
    LEFT JOIN Superpoderes s ON ps.SuperpoderID = s.SuperpoderID";

// Realizar la consulta
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['PersonajeID'] . "</td>";
        echo "<td>" . $row['NombreDelSuperheroe'] . "</td>";
        echo "<td>" . $row['AliasDelSuperheroe'] . "</td>";
        echo "<td>" . $row['FechaDeCreacionDelSuperheroe'] . "</td>";
        echo "<td>" . $row['DescripcionDelSuperheroe'] . "</td>";
        echo "<td>" . $row['ComicID'] . "</td>";
        echo "<td>" . $row['TituloDelComic'] . "</td>";
        echo "<td>" . $row['SuperpoderID'] . "</td>";
        echo "<td>" . $row['NombreDelSuperpoder'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No se encontraron personajes.</td></tr>";
}
        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </table>
</body>
</html>

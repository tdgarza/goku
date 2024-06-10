<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pokemon.css">
    <title>Document</title>
</head>
<body>

    <h1>Agregar un Pokémon</h1>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre del Pokémon:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="altura">Altura (en metros):</label>
        <input type="number" step="0.01" id="altura" name="altura" required><br><br>

        <label for="peso">Peso (en kilogramos):</label>
        <input type="number" step="0.01" id="peso" name="peso" required><br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>

        <label for="tipo">Tipo de Pokémon:</label>
        <select id="tipo" name="tipo" required>
            <option value="Planta">Planta</option>
            <option value="Fuego">Fuego</option>
            <option value="Agua">Agua</option>
            <option value="Eléctrico">Eléctrico</option>
            <option value="Normal">Normal</option>
            <!-- Agrega más tipos de Pokémon según tus necesidades -->
        </select><br><br>

        <input type="submit" value="Agregar Pokémon">
    </form>


</body>
</html>
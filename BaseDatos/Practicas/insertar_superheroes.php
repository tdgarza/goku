<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Superheroes</title>
</head>
<body>
    
<h1>Ingresar Datos de Superhéroes y Cómics</h1>
    <form method="post" action="procesar_formulario_.php" method="post">
        <!-- Campos para datos de Superhéroe -->
        <label for="nombre">Nombre del Superhéroe:</label>
        <input type="text" name="nombre" required><br>
        <label for="alias">Alias del Superhéroe:</label>
        <input type="text" name="alias" required><br>
        <label for="fecha_creacion">Fecha de Creación:</label>
        <input type="date" name="fecha_creacion" required><br>
        <label for="descripcion">Descripción del Superhéroe:</label>
        <textarea name="descripcion" required></textarea><br>
<br>
        <!-- Campos para datos de Cómic -->
        <label for="comic_titulo">Título del Cómic:</label>
        <input type="text" name="comic_titulo" required><br>
        <label for="aniopublicacion">Ano de Publicacion:</label>
        <input type="year" name="aniopublicacion" required><br>
        <label for="descripcion2">Descripcion del Superpoder:</label>
        <input type="text" name="descripcion2" required><br>
<br>
        <!-- Campos para datos de Superpoder -->
        <label for="superpoder_nombre">Nombre del Superpoder:</label>
        <input type="text" name="superpoder_nombre" required><br>
        <!-- Campos para datos de Superpoder -->
        <label for="descripcion3">Descripcion del Superpoder:</label>
        <input type="text" name="descripcion3" required><br>
<br>
        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Guardar Datos">
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<body>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #1f1f1f; /* Fondo oscuro */
    color: #ffffff; /* Texto blanco */
}

h1 {
    color: #ff6600; /* Naranja característico de Batman */
}

form {
    width: 50%;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #ffffff; /* Texto blanco */
}

input[type="text"],
input[type="date"],
textarea {
    width: 60%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid yellow; /* Borde naranja */
    border-radius: 5px;
    background-color: #1f1f1f; /* Fondo oscuro */
    color: #ffffff; /* Texto blanco */
}

input[type="submit"] {
    background-color: yellow; /* Fondo naranja para el botón */
    color: #000; /* Texto blanco */
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Estilo para los campos ocultos */
input[type="hidden"] {
    display: none;
}

/* Estilo para el mensaje de éxito o error */
#mensaje {
    margin-top: 15px;
    padding: 10px;
    border-radius: 5px;
}

/* Estilo para el fondo de Batman */
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    background: url('batman_01.jpg') center/cover no-repeat; /* Reemplaza 'ruta/a/tu/imagen/batman-bg.jpg' con la ruta de tu imagen */
    opacity: 0.3;
}

    </style>

<form method="post" action="procesar_formulario__.php">
    <!-- Campos para datos de Superhéroe -->
    <label for="nombre">Nombre del Superhéroe:</label>
    <input type="text" name="nombre" required><br>

    <label for="alias">Alias del Superhéroe:</label>
    <input type="text" name="alias" required><br>

    <label for="fecha_creacion">Fecha de Creación:</label>
    <input type="date" name="fecha_creacion" required><br>

    <label for="descripcion">Descripción del Superhéroe:</label>
    <textarea name="descripcion" required></textarea><br>

    <!-- Campos ocultos para IDs -->
    <input type="hidden" name="comic_id" value="1"> <!-- ID del cómic -->
    <input type="hidden" name="superpoder_id" value="1"> <!-- ID del superpoder -->

    <!-- Campos para datos de Cómic -->
    <label for="comic_titulo">Título del Cómic:</label>
    <input type="text" name="comic_titulo" required><br>

    <!-- Campos para datos de Superpoder -->
    <label for="superpoder_nombre">Nombre del Superpoder:</label>
    <input type="text" name="superpoder_nombre" required><br>

    <!-- Botón para enviar el formulario -->
    <input type="submit" value="Guardar Datos">
</form>

</body>
</html>
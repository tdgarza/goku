<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<script>
        $(document).ready(function () {
            // Función para cargar y mostrar datos actualizados
            function actualizarDatos() {
                $.get("mostrar.php", function (data) {
                    $("#resultados").html(data);
                });
            }

            // Llama a la función para cargar los datos al cargar la página
            actualizarDatos();

            // Manejo del envío del formulario
            $("#formulario").submit(function (event) {
                event.preventDefault();
                $.post("insertar1.php", $(this).serialize(), function (data) {
                    $("#mensaje").html(data);
                    actualizarDatos(); // Llama a la función para cargar los datos actualizados
                    $("#formulario")[0].reset(); // Limpia el formulario
                });
            });
        });
    </script>
    <h1>Agendas</h1>

<!-- Formulario para agregar una nueva persona -->
<form id="formulario">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>
    <br>
    <label for="nacimiento">Nacimiento:</label>
    <input type="text" id="nacimiento" name="nacimiento" required>
    <br>
    
    <input type="submit" value="Agregar Persona">
</form>

<!-- Mensaje de éxito o error -->
<div id="mensaje"></div>

<!-- Mostrar datos actualizados -->
<div id="resultados"></div>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Captura-Muestra</title>
</head>
<body>
    <script>
        $(document).ready(function(){
            //esta funcion carga y muestra los datos actualizados
            function actualizarDatos(){
                //esta es la pagina de la tabla
                $.get("mostrar.php", function(data){
                    // esta parte de #resultados sera util para ponerle codigo en css 
                    $("#resultados").html(data);
                });
            }
            //con esto, se llama a la funcion para cargar los datos al cargar la pagina
            actualizarDatos();
            //manejo del envio del formulario
            $("#formulario").submit(function(event){
                event.preventDefault();
                $.post("insertarnuevo.php", $(this).serialize(), function(data){
                    $("#mensaje").html(data);
                    actualizarDatos(); //llama a la funcion para cargar los datos de la funcion
                    $("#formulario")[0].reset; //limpia el formulario
                });
            });
        });
    </script>
     <form id="formulario">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellido: </label>
        <input type="text" id="apelldio" name="apellido" required><br>
        <label for="nacimiento">Nacimiento: </label>
        <input type="text" id="nacimiento" name="nacimiento" required><br>  
        <input type="submit" value="Agregar registro"> 
    </form>
    <!-- Mensage de exito o error -->
    <div id="mensaje"></div>
    <!-- Mostrar datos actualizados -->
    <div id="resultados"></div>
</body>
</html>
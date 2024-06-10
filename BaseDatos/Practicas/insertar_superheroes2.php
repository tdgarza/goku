<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Superheroes</title>
</head>
<body>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #1f1f1f;
            color: #FFFFFF;
        }
        h1{
            color: #ff6600; /*color del titulo*/
        }
        form{ /*tamano del formulario */
            width: 50%;
            margin: auto;
        }
        label{
            display: block;
            margin-bottom: 8px;
            color: #f6a700; /*que el texto para meter sea amarillo */
        }
        input[type="text"],
        input[type="date"],
        textarea {
            width : 60%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #f6a700;
            border-radius: 5px;
            background-color: #1f1f1f;
            color: yellow;
        }
        input[type="submit"]{
            background-color: #f6a700;
            color: #000;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="hidden"]{
            display: none;
        }
        #mensaje{
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        body::before{
            content:"";
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
    <form method="post" action="procesar_formulario___.php">
        <h1>Primera tabla de la base de datos</h1>
        <label for="nombre">Nombre del Superheroe: </label>
        <input type="text" name="nombre" requiered>
        <label for="alias">Alias del Superheroe: </label>
        <input type="text" name="alias" requiered>
        <label for="fecha_creacion">Fecha de Creacion: </label>
        <input type="date" name="fecha_creacion" requiered>
        <label for="descripcion">Descripcion del Superheroe: </label>
        <textarea name="descripcion" requiered></textarea><br>
        
        <h1>Segunda tabla de la base de datos</h1>
        <label for="titulo">Titulo del Comic: </label>
        <input type="text" name="titulo" requiered>
        
        <label for="aniopublicacion">Año de Publicacion: </label>
        <!-- Utilizando un campo select para elegir el año -->
        <select name="aniopublicacion" required>
            <?php
            // Obtener el año actual y los últimos 10 años
            $currentYear = date("Y");
            for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
            </select>
        <label for="descripcion1">Descripcion del Comic: </label>
        <textarea name="descripcion1" requiered></textarea><br>
        
        <h1>Tercera tabla de la base de datos</h1>
        <label for="superpoder_nombre">Superpoder: </label>
        <input type="text" name="superpoder_nombre" requiered>
        <label for="descripcion2">Descripcion del Superpoder: </label>
        <textarea name="descripcion2" requiered></textarea><br>

        <input type="submit" value="Guardar Datos">

    </form>
</body>
</html>
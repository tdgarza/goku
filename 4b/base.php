<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Base de datos</h1>


<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $basededatos = "martesjunio";

    $conexion = new mysqli($servername, $username, $pass, $basededatos);
    if ($conexion ->connect_error){
        die("La conexion a la base de datos fallo: " . $conexion->connect_error);
    }
    
    $sql = SELECT * FROM `4b` WHERE 1
?>
</body>
</html>
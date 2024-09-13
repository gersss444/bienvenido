<?php
//importar clase dentro de la misma carpeta
include_once("estudiante.php");

//se usa new para instanciar un objeto de la clase estudiante
$Ricardo = new estudiante();

$Ricardo->nombre = "Ricardo Rodriguez Correa";
$Ricardo->edad = "20";
$Ricardo->carrera = "ISW";
$Ricardo->correo = "ricardo@gmail.com";
$Ricardo->id = "23445567";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Informacion Alumnos</h1>
<h2> <?= $Ricardo->informacion(); ?>  </h2>



</body>
</html>
<?php

include_once("Mascota.php");
$firulais = new Mascota("Firulais","Perro","edad","Don Juan");

//echo "Hola $firulais->nombre";

//$mascotas = array();
//http://localhost/bienvenido/arreglos/

//$mascotas = []
$mascotas = array(

"firulais",
"SoloVino",
"Pancho",
"Fernando",
"Diego Raul",
"Daniel",
"Manuel"


);

echo "$mascotas[4] <br>";
$mascotas[4]="Max";
echo "$mascotas[4] <br>";

$mascotas[] = "Mily el gato";
echo "$mascotas[7] <br>";

$mascotas[] = "pendejo";
echo "$mascotas[8] <br>";

$mascotas[] = "puto";
echo "$mascotas[9] <br>";

$mascotas[] = "joto";
echo "$mascotas[10]. <br>";

$mascotas[] = "gg";
echo "$mascotas[11] <br>";

echo "<hr>";


//indice es opcional
foreach ($mascotas as $indice => $mascota) {

echo "<h3> $indice: $mascota </hr>";

}

echo"<hr>";

//indice => //valor

$estudiante = array(


"nombre" => "juanito",
"apellidos" => "Gonzalez Gomez",
"edad" => 21,
"carrera" => "isw",
"deuda" => "15000.50",
"semestre" => 5



);

foreach ($estudiante as $i => $valor) {
    echo"<p> $i: $valor </p> ";
}

echo"<hr>";

$pokemon = array(


    "nombre" => "puchisurs",
    "tipo" => "sol",
    "fuerza" => 6000000000000000,
    "dueno" => "Komander",
    "region" => "Astral",
    "evolucion" => 5

    );


    foreach ($pokemon as $i => $valor) {
        echo"<p> $i: $valor </p> ";
    }



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

<h2>Alumno <?=$estudiante["nombre"];?> <?=$estudiante["apellidos"];?> </h2>
<ul>

<li><b>Edad:</b> <?=$estudiante["edad"];?></li>
<li><b>Carrera:</b> <?=$estudiante["carrera"];?></li>
<li><b>Semestre:</b> <?=$estudiante["semestre"];?></li>
</ul>

<h3>
<b>Deuda actual: </b>
<span style="color:#f00;">

$<?=$estudiante["deuda"];?>
</span>

</h3>


</body>
</html>
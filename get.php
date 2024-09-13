<?php
//get

/*    --------------RUTA----------------------

protocolo://  dominio / carpeta(s) / archivo.php
http:// localhost / bienvenido / get.php

*/

/*
                     RUTA                    ? variable = valor & variable2 = valor2
http:// localhost / bienvenido / get.php ? nombre = Ricardo & edad = 19

*/


$nombre = $_GET["nombre"];
//$apellido = $_GET["apellido"];
//$senku = $_GET["senku"];
$edad = $_GET["edad"];


echo "<h1> $nombre </h1>";
//echo "<h1> $apellido </h1>"//echo "<h1> $senku </h1>";

if(isset($_GET["nombre"]) && isset($_GET["edad"])){

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];

if ($edad>=18){
echo"<p> Tienes $edad años y eres mayor de edad </p> ";
}else{
echo "eres menor de edad";
}
}else{
echo "<h1> No enviaste nombre o edad </h1>";
}


?>

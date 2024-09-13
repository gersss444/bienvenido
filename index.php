<?php

function saludar(){

 echo "Hola Funcion PHP";


}

function saludar2 ( $nombre ){
echo "Hola $nombre <br>";
}

function saludar3($nombre = "Mundo"){
 echo "Hola $nombre <br>";

}

saludar3();
saludar3("Fernanda");

function saludar4($nombre, $apellido1, $apellido2 =null){

    echo "Hola $nombre  $apellido1 $apellido2 <br>";

}

saludar4("Fernanda", "Barrón", "Rivera");


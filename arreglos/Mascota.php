<?php

class Mascota {
//para acceder a las siguientes propiedades, se utiliza el
//$this->nombre_propiedad
public $nombre;
public $tipo;
public $edad;
public $dueno;


//constructor: Nos ayuda a crear un instancia de un objeto (MASCOTA)
// con sus propiedades

function __construct($nombre,$tipo,$edad,$dueno){

//echo "se creo una nueva instancia de la clase mascota";
$this->nombre = $nombre;
$this->tipo = $tipo;
$this->edad = $edad;
$this->dueno = $dueno;


}




}




?>
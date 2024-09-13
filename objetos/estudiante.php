<?php
class Estudiante {

////alcance/////

//public --se accede desde cualquier lugar
//private-- solo desde la misma clase
//protected -- desde la misma clase y herencias
//http://localhost/bienvenido/objetos/

public $id;
public $nombre;
public $edad;
public $carrera;
public $correo;

function informacion (){
//$this->nombre_variable es obligatorio oara acceder a las propiedades de la clase
//$this->edad      $this->$edad    <- ERROR COMUN (doble $)


$info ="
Nombre:$this->nombre <br>
Edad:$this->edad <br>
Carrera:$this->carrera <br>
Correo:$this->correo <br>
Id:$this->id <br>
";
return $info;
}


}


?>
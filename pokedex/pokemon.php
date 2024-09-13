<?php

class pokemon{

public $nombre; //text
public $tipo; //srlrct, normal,fuego.agua,tierra
public $fuerza; //number
public $dueno; //text
public $habilidad; //text
public $region; //text
public $evolucion; //text
public $prevolucion; //text


function __construct($nombre, $tipo,$fuerza,$dueno,$habilidad,$region,$evolucion,$prevolucion)


$this->nombre = $nombre;
$this->tipo = $tipo;
$this->fuerza = $fuerza;
$this->dueno = $dueno;
$this->habilidad = $habilidad;
$this->region = $region;
$this->evolucion = $evolucion;
$this->prevolucion = $prevolucion;


}












?>
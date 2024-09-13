<?php

if(isset($_POST["usuario"] )){

$usuario =$_POST["usuario"];
$contrasena =$_POST["contrasena"];

if( $usuario=="Ricardo"&& $contrasena =="123"){
//echo"Bienvenido puto";

header("location:bienvenida.php?usuario=$usuario");

}else{

header("location:login.php?usuario=$usuario");
//echo"El usuario no existe o la contrasena es invalida";
}


}else{

echo"No se envio el formulario";
}






?>

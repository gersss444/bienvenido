<?php
$usuario="";
$error = "";

if(isset($_GET["usuario"])){
$usuario =$_GET["usuario"];
$error="El usuario $usuario con el q iniciaste sesion no existe";
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

<!--




header()-> utilizado para cambiarl el encabezado de la peticion al servidor
location -> redireccionar la peticion




-->





<h1>LOGIN</h1>

<h3 style="color:red;"> <?= $error; ?> </h3>

<form action="post.php" method="post">

<input type="text" name="usuario" placeholder="Usuario" value="">

<br>

<input type="password" name="contrasena" placeholder="escribe una contraseña"value="">

<button type="submit">Iniciar sesion</button>

</form>


</body>
</html>



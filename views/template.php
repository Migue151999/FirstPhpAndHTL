<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Template</title>

</head>
<body>
<header>
    <h1>LOGOTIPO</h1>
</header>

<?php
include "views/navegacion.php";
?>

<?php
session_start();
if(isset($_SESSION['id'])){
    echo 'hola usuario';
}else {
  
    echo 'Inicia Sesion';
}

?>

<h1>INGRESAR</h1>
<form action="./views/ingresar.php" method="post">
    <input type="text" name="user">
    <input type="password" name="pass" id="pass">
    <input type="submit">
</form>
<br>
<form action="./views/cerrarsesion.php" method="post">
<input type="submit" value="Cerrar sesion">
</form>



<section>

<?php
$mvc = new MvcController();
$mvc -> enlacesPaginasController();
?>

</section>
    
</body>
</html>
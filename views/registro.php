<?php
include("conexion.php");
?>

<h1>REGISTRO DE USUARIO</h1>

<form method="post" action="">

usuario: <input type="text" placeholder="Usuario" name="usuario" required>
password: <input type="password" placeholder="Contraseña" name="password" required>
email: <input type="email" placeholder="Email" name="email" required>
<input type="submit" value="Enviar">

</form>

<?php
if ($_POST) {
    $user=$_POST['usuario'];
    $pass=$_POST['password'];
    $mail=$_POST['email'];
    mysql_query("insert into usuarios(usuario,password,email)values('$user','$pass','$mail')")or die(mysql_error());

    echo"<h2>DATO GUARDADO</h2>";
}

?>

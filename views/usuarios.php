<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "cursophp";

$connection = new mysqli($host, $username, $password, $database);
if (mysqli_connect_error()) {
	trigger_error("Error to conecte to MySQL");
}

?>

<style>

.contenedor .tabla{
    margin: 50px 0 0 0;
    width: 500px;
    height: auto;
    padding: 20px;
    background: #fff;
    border-radius: 6px 6px 6px 6px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#dadedc;}
</style>

<div class="tabla">
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Correo</th>
				
				</tr>
					<?php
						$consulta = "SELECT * FROM usuarios";
						$ejecutarConsulta = mysqli_query($connection, $consulta);
						$verFilas = mysqli_num_rows($ejecutarConsulta);
						$fila = mysqli_fetch_array($ejecutarConsulta);

						if(!$ejecutarConsulta){
							echo"Error en la consulta";
						}else{
							if($verFilas<1){
								echo"<tr><td>Sin registros</td></tr>";
							}else{
								for($i=0; $i<=$fila; $i++){
									echo'
										<tr>
											<td>'.$fila[0].'</td>
											<td>'.$fila[1].'</td>									
											<td>'.$fila[3].'</td>
										</tr>
									';
									$fila = mysqli_fetch_array($ejecutarConsulta);

								}

							}
						}


					?>
						
						
				
				
			</table>
		</div>
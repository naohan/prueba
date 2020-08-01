<?php require('Connections/conexionBD.php'); ?>
<?php
	
	$busqueda=$_GET["buscar"];
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	$consulta="SELECT * FROM datos_personales WHERE nom LIKE '%$busqueda%'";
	$resultado=mysqli_query($conexion,$consulta);
	
	
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
		{
		/* array asociativo*/
		echo "<form action='Actualizar_registro.php' method='get'>";
		echo "<input type='text' name='d_nom' value='" .$fila['nom'] ."'><br>";
		echo "<input type='text' name='d_ape' value='" .$fila['ape'] ."'><br>";
		echo "<input type='text' name='d_dni' value='" .$fila['dni'] ."'><br>";
		echo "<input type='text' name='d_fecha' value='" .$fila['fecha'] ."'><br>";
		echo "<input type='submit' name='enviado' value='Actualizar!'>";
		echo "</form>";
		echo "<br>";
		echo "<br>";
		}
		

		mysqli_close($conexion);


		
		


?>
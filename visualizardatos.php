<?php require('Connections/conexionBD.php'); ?>
<?php require('Connections/funciones.php'); ?>
<?php
	$conexion=mysqli_connect($hostname,		
	$username,$password,$database);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	$consulta="SELECT * FROM datos_personales";
	$resultado=mysqli_query($conexion,$consulta);
	
	while($fila=mysqli_fetch_row($resultado))
		{
		
		echo $fila[0] . " " ;
		echo $fila[1] . " " ;
		echo $fila[2] . " " ;
		echo $fila[3] . " " ;
		echo "<br>";
		echo "<br>";
		}
		

		mysqli_close($conexion);


		
		


?>

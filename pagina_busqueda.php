
<?php
	
	$busqueda=$_GET["buscar"];
	require('Connections/conexionBD.php');
	//almaseña el termino a buscar
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	//$consulta="SELECT * FROM datos_personales WHERE nom LIKE '%$busqueda%'";
	$consulta="SELECT * FROM datos_personales WHERE nom LIKE '$busqueda'";
	echo "$consulta <br> <br>";
	$resultado=mysqli_query($conexion,$consulta);
	
	
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
		{
		/* array asociativo*/
		echo $fila['nom'] . " " ;
		echo $fila['ape'] . " " ;
		echo $fila['dni'] . " " ;
		echo $fila['fecha'] . " " ;
		echo "<br>";
		echo "<br>";
		}
		

		mysqli_close($conexion);


		
		


?>
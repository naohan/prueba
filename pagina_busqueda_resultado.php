
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<?php
	function ejecuta_consulta($labusqueda){
	require('Connections/conexionBD.php');	
	//$busqueda=$_GET["buscar"];
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	$consulta="SELECT * FROM datos_personales WHERE nom LIKE '%$labusqueda%'";
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


	}
		


?>
</head>

<body>
	<?php
		
		$mibusqueda= isset($_GET["buscar"]) ? $_GET["buscar"] : NULL;
		//isset determina si una variable esta definiday no es null
		//informacion a la misma pagina
		$mipag=$_SERVER["PHP_SELF"];
		if($mibusqueda!=NULL)//no se encuentra con nada
		{
			ejecuta_consulta($mibusqueda);
			}else{
				echo("<form action='" . $mipag ."'method='get'>
				<label>Buscar : <input type='text' name='buscar'></label>
    			<input type='submit' name='enviando' value='Enviar'>
    			</form>");
			}
	?>
	
</body>
</html>
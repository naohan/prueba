<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php

	require('Connections/conexionBD.php');
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	//no se puede ultyizar $conexion porq no se declaro la variable
	/*para evitar injeccion sql (codgo ascii)-mysqli_real_escape_string*/
	$usuario= mysqli_real_escape_string($conexion,$_GET["usu"]);
	$contra= mysqli_real_escape_string($conexion,$_GET["con"]);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	$consulta="DELETE FROM usuario WHERE usuario='$usuario' AND contra='$contra'";
	echo "$consulta <br><br>";
	mysqli_query($conexion,$consulta);
	if (mysqli_affected_rows($conexion)>0){
		echo "baja prosesada";
	}else{
		echo "no se ha encontrado usuario";
		}
	
	/*if(mysqli_query($conexion,$consulta)){
		echo "baja procesada";
		}
		mysqli_close($conexion);
	*/
?>

</body>
</html>
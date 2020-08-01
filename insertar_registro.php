<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>
<?php
	$nom=$_GET["d_nom"];
	$ape=$_GET["d_ape"];
	$dni=$_GET["d_dni"];
	$fecha=$_GET["d_fecha"];
	require('Connections/conexionBD.php');	
	
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");//codificacion de caracteres

	$consulta="INSERT INTO datos_personales(nom, ape, dni, fecha) VALUES ('$nom', '$ape', '$dni', '$fecha')";
	$resultado=mysqli_query($conexion,$consulta);
	if($resultado==false)
	{
		echo "error en la consulta";
	}else{
		echo"registro guardado";
		}
	
		mysqli_close($conexion);



?>

</body>
</html>

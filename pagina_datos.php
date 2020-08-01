<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	$usuario=$_GET["usu"];
	$contra=$_GET["con"];
	require('Connections/conexionBD.php');
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	//no se puede ultyizar $conexion porq no se declaro la variable
	$usuario= mysqli_real_escape_string($conexion,$_GET["usu"]);
	$contra= mysqli_real_escape_string($conexion,$_GET["con"]);
	if(mysqli_connect_errno())
	{
		echo"fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database)or die ("no se encuentra la base de datos");
	mysqli_set_charset($conexion,"utf8");

	$consulta="SELECT * FROM usuario WHERE usuario='$usuario' AND contra='$contra'";
	echo "$consulta <br><br>";
	$resultado=mysqli_query($conexion,$consulta);
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
		echo " Bienvenido $usuario <br> Estos son tus datos: <br>";
		echo"<table><tr><td>";
		echo $fila['usuario']. "</td><td>";
		echo $fila['contra']. "</td><td>";
		echo $fila['tlfno']. "</td><td>";
		echo $fila['direccion']. "</td><td></tr></table>";
		
		echo "<br><br";
		}
		mysqli_close($conexion);

?>

</body>
</html>

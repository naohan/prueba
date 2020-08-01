
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
	<?php
	$curso =$_GET["buscar"];
	require("Connections/conexionBD.php");
	$conexion=mysqli_connect($hostname,$username,$password,$database);
	
	if(mysqli_connect_errno()){
		echo "fallo al conectar con la BBDD";
		exit();
	}
	mysqli_select_db($conexion, $database) or die ("No se encuentra la BBDD");
	mysqli_set_charset($conexion,"utf8");
	//se crea la sentencia sql sustituyendo los valores de criterio por el simbolo?
	$sql="SELECT nompro ,dnipro, curso from datos_pro where curso=? ";
	//preparamos la consulta con la funcion mysqli_prepare().Esta funcion requiere dos parametros: el objeto conexion y lal sentencia sql
	$resultado=mysqli_prepare($conexion,$sql);//la funcion devuelve objeto de tipo mysqli stmt
	//Unimos los parametros a la sentencia sql. de esto se encarga la funcion mysqli_stmt_bind_param() . Devuelve true o false.
	//esta funcion requiere tres parametros: el objeto mysqli_smts(devuelto por mysqli_prepare), el tipo de dato que se utiliza como criterio en sql, variable con criterio
	
	$ok=mysqli_stmt_bind_param($resultado,"s",$curso);
	//ejecuta la consulta con la funcion mysqli_stmt_execute().Esta funxion devuelve true false
	//necesitas como parametro el objeto mysqli_stmt
	$ok=mysqli_stmt_execute($resultado);
	if($ok==false){//por an motivo no ah tenido exito
		echo "Error al ejecutar la consulta";
	}else{
		//asociar variablees al resultado de la consulta
		$ok=mysqli_stmt_bind_result($resultado, $nompro, $dnipro,$curso);
		echo "Cursos encontrados: <br><br>";
		//lectura de valores
		while(mysqli_stmt_fetch($resultado)){
			echo $nompro ." ". $dnipro." ".$curso ."<br> " ;
			}
			mysqli_stmt_close($resultado);
		}
	
	
	
	
	
	
	
	?>
</body>
</html>
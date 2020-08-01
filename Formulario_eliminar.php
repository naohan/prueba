<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#FFC;
}


</style>
</head>

<body>
<h1>Registro de Artículos</h1>

<form name="form1" method="get" action="eliminar_registro.php">
  <table border="0" align="center">
    <tr>
      <td>Nombre</td>
      <td><label for="d_nom"></label>
      <input type="text" name="d_nom" id="d_nom"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="d_ape"></label>
      <input type="text" name="d_ape" id="d_ape"></td>
    </tr>
    <tr>
      <td>DNI</td>
      <td><label for="d_dni"></label>
      <input type="text" name="d_dni" id="d_dni"></td>
    </tr>

    <tr>
      <td>Fecha</td>
      <td><label for="d_fecha"></label>
      <input type="text" name="d_fecha" id="d_fecha"></td>
    </tr>
 
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
      <td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
    </tr>
  </table>
</form>
</body>
</html>
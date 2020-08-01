<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<h1>Registro estudiantes nuevos</h1>
	<form action="resultado_insertar_estudiante.php" method="get">
    <table>
    <tr><td><label>Nombre Completo:</label></td><td><input type="text" name="d_nom"></td></tr>
    <tr><td><label>Apellido Completo:</label></td><td><input type="text" name="d_ape"></td></tr>
    <tr><td><label>DNI:</label></td><td><input type="text" name="d_dni"></td></tr>
    <tr><td><label>Fecha:</label></td><td><input type="text" name="d_fecha"></td></tr>
    <tr><td colspan="2" align="center" id="boton"> 
    <input type="submit" name="enviando" value="Enviar"></td></tr>
    </table>
    </form>
</body>
</html>
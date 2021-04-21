<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
			<td>telefono</td>	
		</tr>
		
	</table>
	<br>
		<?php 
			$enlace = mysql_connect("46.17.175.47", "u140170884_dreyl", "829An963dr80Es96");
			mysql_select_db("u140170884_usdnj", $enlace); 
			$resultado = mysql_query("SELECT * FROM usuariosUberLyft", $enlace);
			$número_filas = mysql_num_rows($resultado);
			echo "$número_filas Filas\n";		
		?>
		

</body>
</html>
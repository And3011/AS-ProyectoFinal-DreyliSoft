<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('46.17.175.47','u140170884_dreyl','829An963dr80Es96');
	//verificamos la conexion s
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('u140170884_usdnj');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['apellido'];
	$mensaje=$_POST['email'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO usuariosUberLift VALUES('$nombre',
								   '$correo',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
<?php
include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['usuario']) && !empty($_POST['usuario']) &&
isset($_POST['contrasenna']) && !empty($_POST['contrasenna']) &&
isset($_POST['confirmarContrasenna']) && !empty($_POST['confirmarContrasenna']) &&
isset($_POST['correo']) && !empty($_POST['correo']) &&
$_POST['contrasenna'] == $_POST['confirmarContrasenna'])
{
	$con=mysql_connect($host,$user,$pw)
	or die ("problemas al conectar server");
	
	mysql_select_db($db,$con)
	or die ("problemas al  conectar la base de datos");
	
	mysql_query("INSERT INTO persona (Nombre,Usuario,Contrasenna,Correo)
	VALUES ('$_POST[nombre]','$_POST[usuario]','$_POST[contrasenna]','$_POST[correo]')",$con);
	
	//echo "Exito";
	header('Location: index.php');

} else{
	echo "Verifique que llenaste los datos y que los paswords coinciden";
}
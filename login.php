<?php
include("conexion.php");
session_start();
$error='';
if(isset($_POST['Ingresar'])){
	//echo "precione Ingresar";
	if(empty($_POST['username']) || empty($_POST['password'])){
		$error="Usuario o contraseña invalida";
	}
	else{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$con=mysql_connect($host,$user,$pw)
		or die ("problemas al conectar server");
	
		mysql_select_db($db,$con)
		or die ("problemas al  conectar la base de datos");
		
		
		$result = mysql_query("select idPersona from persona where Contrasenna = '$password' and Usuario = '$username'");
		$row = mysql_fetch_assoc($result);
		$id = $row['idPersona'];
		if($id > 0){
			//$_SESSION['login_user']=$username;
			//header("location: profile.php");
			echo "Exito";
		}else{
			$error = "Usuario o contraseña invalidos";
		}
	}
}
if(isset($_POST['Registrarse'])){
	//echo "precione Registrarse";
	header('Location: Prueba.php');
}
?>
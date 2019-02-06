<?php
include('login.php');

if(isset($_SESSION['login_user'])){
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema de empleos.</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
	<h1>Sistema de login</h1>
	<div id="login">
		<h2>Inicio de sesion</h2>
		<form action="" method="post">
		<label>Nombre de usuario: </label>
		<input id="name" name="username" placeholder="username" type="text">
		<label>contraseña: </label>
		<input id="password" name="password" placeholder="**********" type="password">
		<input name="submit" type="submit" value=" ingresar ">
		<span><?php echo $error; ?></span>
		</form>
	</div>
</div>
</body>
</html>
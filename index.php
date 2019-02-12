<?php
include('login.php');

if(isset($_SESSION['login_user'])){
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Requerimientos de Software</title>
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
	<div class="material" id="login">
		<h1>Iniciar Sesion</h1>
		<form action="" method="post">
			<div class="tf-area">
				<input type="text" id="name" name="username">
				<label for="name">Nombre de usuario</label>
			</div>
			
			<div class="tf-area">
				<input type="password" id="password" name="password">
				<label for="password">Contrase&ntilde;a</label>
			</div>
			
			<span style="color:red"><?php echo $error; ?></span>
			<input class="button" name="Ingresar" type="submit" value="Ingresar" style="width:100%">
			<input class="text-button" name="Registrarse" type="submit" value="Crear cuenta">
		</form>
	</div>
</div>
</body>
</html>
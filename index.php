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
		<h2>Inicio de Sesion</h2>
		<form action="" method="post">
			<div style="text-align:left">
				<input type="text" id="name" name="username">
				<label for="name">Nombre de usuario</label>
			</div>
			
			<div style="text-align:left">
				<input type="password" id="password" name="password">
				<label for="password">Contrase&ntilde;a</label>
			</div>
			
			<span style="color:red"><?php echo $error; ?></span>
			<input name="submit" type="submit" value="Ingresar">
		</form>
	</div>
</div>
</body>
</html>
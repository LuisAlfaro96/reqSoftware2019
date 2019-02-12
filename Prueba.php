<?php
	include('registrar_c.php');	
?>

<html>
<head>
<title>Registro</title>
</head>

<body>
<link href="css/login.css" rel="stylesheet" type="text/css">
<div class="material" id="signup">
	<h1>Crea tu cuenta</h1>
	<form action="" method="post">
		<div class="tf-area">
			<input type="text" name="nombre" />
			<label>Nombre</label>
		</div>
		
		<div class="tf-area">
			<input type="text" name="usuario" />
			<label>Nombre de usuario</label>
		</div>
		
		<div class="tf-area">
			<input type="text" name="correo" />
			<label>E-mail</label>
		</div>
		
		<div>
			<div class="tf-area" style="float:left; width:48%;">
				<input type="password" name="contrasenna"/>
				<label>Contrase&ntilde;a</label>
			</div>
			
			<div class="tf-area" style="float:right; width:48%;">
				<input type="password" name="confirmarContrasenna"/>
				<label>Confirmar contrase&ntilde;a</label>
			</div>
		</div>
		
		<span style="color:red"><?php echo $error; ?></span>
		<input class="button" name="Registrar" type="submit" value="Registrar">
	</form>
</div>
</body>

</html>
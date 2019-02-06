<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema de Empleos - Página principal</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="sidenav">
	<b>Current User: <i><?php echo $login_session; ?></i></b>
	<hr>
	<b id="logout"><a href="logout.php">Log Out</a></b>
	<hr>
	<a href="profile.php">profile</a>
	<hr>
	<a href="jobs.php">Jobs</a>
	<hr>
</div>
<div class="mainsidenav">
	<div id="profile">
		<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
	</div>
	</div>
</div>
</body>
</html>

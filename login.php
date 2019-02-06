<?php
session_start();
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['username']) || empty($_POST['password'])){
		$error="Usuario o contraseña invalida";
	}
	else{
		$username=$_POST['username'];
		$password=$_POST['password'];
/*									servidor	 username	 password	  BD*/
		$connection= mysqli_connect("localhost", "proyecto", "proyecto", "loginsys");
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$username=stripslashes($username);
		$password=stripslashes($password);
		$username=mysqli_real_escape_string($connection, $username);
		$password=mysqli_real_escape_string($connection, $password);
		$sql = "select id_user from user where password = '$password' and username = '$username'";
		$query = mysqli_query($connection, $sql);
		$numrows = mysqli_num_rows($query);
		if($numrows == 1){
			$_SESSION['login_user']=$username;
			header("location: profile.php");
		}else{
			$error = "Usuario o contraseña invalidos";
		}
		mysqli_close($connection);
	}
}
?>
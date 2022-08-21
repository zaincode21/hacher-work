<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>admin login</title>
</head>
<body>
	<div class="center">
		<h1>Admin Login</h1>
		<h5>Enter your personal detail to create account</h5>
<form method="POST" action="">
	<div class="txt-field">
		
		<input type="text" name="user" placeholder="Enter username" required>
		
	</div><br>
	
	<div class="txt-field">
	
		<input type="password" name="pass" placeholder="Enter password" required>
  <span></span>
		
	</div><br>
	<button type="submit" name="submit">Login</button>
	<br><br>
	</form>
	<?php 
include 'connect.php';
session_start();
if (isset($_POST['submit'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$login=mysqli_query($con,"SELECT * FROM manager WHERE user_name='$user'AND password='$pass'");
	
	if ($row=mysqli_num_rows($login)) 
	 {
	 	$_SESSION['username']=$user;
	 	$_SESSION['password']=$pass;
		echo "<script>alert('welcome manager')</script>";
		header("location:car_reg.php");
	}
	else{
		echo "<script>alert('your password is not match username')</script>";
	}


}
	 ?>
</div>
</body>
</html>
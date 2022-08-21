<?php include"include/navbar.php";
session_start();
if (!$_SESSION['username']) {
	header("location:login.php");}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<div class="center">
		<h1>Car registratio</h1>
		<h5>"Enter your car detail in #car_control!!"</h5>
<form method="POST" action="">
	<div class="txt-field">
		
		<input type="text" name="cr_serial" placeholder="Enter serial_number" required>
		
	</div><br>
	
	<div class="txt-field">
	
		<input type="text" name="speed" placeholder="Enter_speed_max" required>
  <span></span>
</div><br>
  <div class="txt-field">
		
		<input type="text" name="location" placeholder="Enter location" required>
		
	</div><br>

	<button type="submit" name="submit">Login</button>
	<br><br>
	<?php 
 		include 'connect.php';
 		if (isset($_POST['submit'])) {
 			$ps_sr=$_POST['cr_serial'];
 			$sp=$_POST['speed'];
 			$loc=$_POST['location'];

 			$insert=mysqli_query($con,"INSERT INTO posters VALUES('','$ps_sr','$sp','$loc',now())");
 			if ($insert) {
 				echo "<script>alert('posters is inserted')</script>";
 			}
 			else{
 					echo "<script>alert('query is fail')</script>";
 			}
 		}
	 ?>
</form>
</div>
</body>
</html>
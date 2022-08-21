<?php 
include"include/navbar.php";
session_start();
if (!$_SESSION['username']) {
	header("location:login.php");}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="center">
		<h1>Car registratio</h1>
		<h5>"Enter your car detail in #car_control!!"</h5>
<form method="POST" action="">
	<div class="txt-field">
		
		<input type="text" name="cr_own" placeholder="Enter car_own" required>
		
	</div><br>
	
	<div class="txt-field">
	
		<input type="text" name="cr_name" placeholder="Enter_car_name" required>
  <span></span>
</div><br>
  <div class="txt-field">
		
		<input type="text" name="cr_plt" placeholder="Enter car_plate" required>
		
	</div><br>
	<div class="txt-field">
		
		<input type="text" name="cr_ser" placeholder="Enter car_serial" required>
		</div>
	<br>
	<button type="submit" name="submit">Login</button>
	<br><br>
</form>
</div>
<?php 
include 'connect.php';
if (isset($_POST['submit'])) {
	$cr_on=$_POST['cr_own'];
	$cr_nm=$_POST['cr_name'];
	$cr_plt=$_POST['cr_plt'];
	$cr_sr=$_POST['cr_ser'];
	

$insert=mysqli_query($con,"INSERT INTO car VALUES('','$cr_on','$cr_nm','$cr_plt','$cr_sr',now())");


if ($insert) {
	echo "<script>alert('okay')</script>";
}
else{
	echo "fail";
}	

}
 ?>
</body>
</html>
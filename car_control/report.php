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
	<link rel="stylesheet" type="text/css" href="report_style.css">
	<title>Dashboard</title>
</head>
<body>
	<div class="center">
<form method="POST">

	<table>
		<tr class="tr1">
		<th>Car_id</th>
		<th>Car own</th>
		<th>Car_name</th>
		<th>Car_Plate</th>
		<th>Car_serial</th>
		<th>Date</th>
		
	</tr>
	<?php 
	include'connect.php';
	$select=mysqli_query($con,"SELECT * FROM car");
	while ($row=mysqli_fetch_array($select)) {
		echo "<tr>"; 
		echo "<td>"; echo $row['car_id']; echo "</td>";
		
		echo "<td>"; echo $row['car_own']; echo "</td>";
		echo "<td>"; echo $row['car_name']; echo "</td>";
		echo "<td>"; echo $row['car_plate']; echo "</td>";
		echo "<td>";echo $row['car_serial'];  echo "</td>";
		echo "<td>"; echo $row['ate']; echo "</td>";
		 echo "</tr>";
	}
	 ?>
	</table>
</form>
</div>
</body>
</html>
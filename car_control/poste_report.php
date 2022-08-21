<?php include"include/navbar.php"; 
session_start();
if (!$_SESSION['username']) {
	header("location:login.php");}?>
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
		<th>poster_id</th>
		<th>poster_serial</th>
		<th>speed max</th>
		<th>location</th>
		<th>date</th>
		
		
	</tr>
	<?php 
	include'connect.php';
	$report=mysqli_query($con,"SELECT * FROM posters");
	while ($row=mysqli_fetch_array($report)) {
		echo "<tr>";
		echo "<td>"; echo $row['ap_id'] ;echo "</td>";
		echo "<td>"; echo $row['poster_serial'] ;echo "</td>";
		echo "<td>"; echo $row['speed_max'] ;echo "</td>";
		echo "<td>"; echo $row['lacation'] ;echo "</td>";
		echo "<td>"; echo $row['time'] ;echo "</td>";
		echo "</tr>";
	}
	 ?>
	</table>
</form>
</div>
</body>
</html>
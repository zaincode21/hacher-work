<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #4CAF50;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
.bt{
  width: 100px;
  height: 30px;
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="car_reg.php">Car Registertion</a></li>
  <li><a href="posters.php">Poster Registertion</a></li>
<li class="right"><a href="#about"><button class="bt">Logout</button> </a></li>
  <li class="right"><a href="report.php">Car Report</a></li>
  <li class="right"><a href="poste_report.php">Poster Report</a></li>
 
</ul>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_navbar_horizontal_responsive by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:38:32 GMT -->
</html>

<?php
    session_start();
    require "dbconfig.php";
?>	



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mainstyles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   

<link rel="stylesheet" href="animate.min.css">

</head>
<body class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">
<style>
.content {
  max-width: 500px;
  margin:auto;
  border-radius:10px;
  background: white;
  padding: 10px;
}
</style>

<div class="header"style="border-radius:10px;">
  <h1>Next Door Invoice Processing</h1>
  <p><i>Our Cloth Knows the Artistic Neighbour</i></p>
  <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
    <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 
</div>

<div class="topnav" style="border-radius:10px;">
  <a href="http://localhost:7882/viggyproject/home.php">HOME</a>
  <a href="http://localhost:7882/viggyproject/matdept.php">MATERIALS</a>
  <a href="http://localhost:7882/viggyproject/order.php">ORDER</a>
  <a href="http://localhost:7882/viggyproject/branch.php">REGISTER YOUR BRANCH</a>
  <a href="http://localhost:7882/viggyproject/viggylogin.php" style="float:right">LOGOUT</a>
  <a href="http://localhost:7882/viggyproject/shipment.php" style="float:right">SHIPMENT</a>
  <a href="http://localhost:7882/viggyproject/orderstatus.php" style="float:right">ORDER STATUS</a>
</div>



<br>
<br>
<div class ="content"style="background-color:#99FF66;text-align:left">
<center>
<form class="myform wow zoomIn" data-wow-duration="3s" data-wow-delay=".6s" action="ordersuccess.php" method="post">

<?php
$servername = "localhost:3306";
$username ="root";
$password ="";
$dbname="textile_management";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$x=$_SESSION['oid'];
$sql="SELECT *
 FROM SHIPMENT
 WHERE OID='$x'";
$result = $conn->query($sql);
if ($result->num_rows > 0)
	
	{error_reporting(error_reporting() & ~E_NOTICE);
		$Y=$_SESSION['meters']*10;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<h1><p>Shipment ID: " . $row["SHIPID"]."<br>". "Order id: " .$row["OID"]."<br>"."Your Branch ID: ".$row["BID"]."<br>"."Materail Ordered: ".$row["MATR_DELIVER"]."<br>"."Amount: ".$Y."<br>"."Shipment vehicle number "."<br>".$row["VEHNO"]."<br></h1></p>";
  }
  }
 
else {
  echo "0 results";
  }
$conn->close();
?>
</center>
</div>
<footer class="footer-distributed" style="background-color:SandyBrown;">

			<div class="footer-left">
          <img src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px">
			<h3>	<span>Next Door Invoice Processing</span></h3>
                <br>
				<p class="footer-company-name">© 2020 NextDoor Invoice Processing Pvt. Ltd.</p>
			</div>

			<div class="footer-center" style="text-color:black;">	
			<p class="footer-links ">
  <a href="http://localhost:7882/viggyproject/home.php">HOME</a><br>
  <a href="http://localhost:7882/viggyproject/matdept.php">MATERIALS</a><br>
  <a href="http://localhost:7882/viggyproject/order.php">ORDER</a><br>
  <a href="http://localhost:7882/viggyproject/branch.php">REGISTER YOUR BRANCH</a><br>
  <a href="http://localhost:7882/viggyproject/viggylogin.php" >LOGOUT</a><br>
  <a href="http://localhost:7882/viggyproject/shipment.php" >SHIPMENT</a><br>
				</p>
				</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Website designed by:</span>
					<h5>Harsha Chandan Vamshi</h5></p>
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
<script src="jquery.min.js" type="text/javascript"></script>
<script src="wow.min.js"></script>
<script>
new WOW().init(); 
</script>
	
	
	</body>
</html>

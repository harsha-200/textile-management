<?php
    session_start();
?>	


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mainstyles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<link rel="stylesheet" href="animate.min.css">
</head>
<body class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

<div class="header" style="border-radius:10px;">
  <h1>Next Door Textile Company</h1>
  <p><i>Our Cloth Knows the Artistic Neighbour</i></p>
  <h3>Welcome <?php echo $_SESSION['username']?></h3>
  
  <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
    <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 	  
</div>

<div class="topnav" style="border-radius:10px;">
  <a href="http://localhost/viggyproject/home.php">HOME</a>
  <a href="http://localhost/viggyproject/matdept.php">MATERIALS</a>
  <a href="http://localhost/viggyproject/order.php">ORDER</a>
  <a href="http://localhost/viggyproject/branch.php">REGISTER YOUR BRANCH</a>
  <a href="http://localhost/viggyproject/statistics.php">STATISTICS</a>
  <a href="http://localhost/viggyproject/viggylogin.php" style="float:right">LOGOUT</a>
  <a href="http://localhost/viggyproject/shipment.php" style="float:right">SHIPMENT</a>
</div>
























<footer class="footer-distributed" style="background-color:SandyBrown;">

			<div class="footer-left">
          <img src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px">
			<h3>	<span>NextDoor Textile Company</span></h3>
                <br>
				<p class="footer-company-name">© 2020 NextDoor Textile Company Pvt. Ltd.</p>
			</div>

			<div class="footer-center" style="text-color:black;">	
			<p class="footer-links ">
  <a href="http://localhost/viggyproject/home.php">HOME</a><br>
  <a href="http://localhost/viggyproject/matdept.php">MATERIALS</a><br>
  <a href="http://localhost/viggyproject/order.php">ORDER</a><br>
  <a href="http://localhost/viggyproject/branch.php">REGISTER YOUR BRANCH</a><br>
  <a href="http://localhost/viggyproject/viggylogin.php" >LOGOUT</a><br>
  <a href="http://localhost/viggyproject/shipment.php" >SHIPMENT</a><br>
				</p>
				</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>Website designed by:</span>
					<h5>Vignesh g and Vanlaldika</h5></p>
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

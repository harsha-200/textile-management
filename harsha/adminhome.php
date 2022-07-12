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

<div class="header" style="border-radius:10px;">
  <h1>Next Door Invoice Processing</h1>
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
  <a href="http://localhost:7882/viggyproject/adminhome.php">Home</a>
  <a href="http://localhost:7882/viggyproject/Brreq.php">Branch Requests</a>
  <a href="http://localhost:7882/viggyproject/Orreq.php">Order Requests</a>
  <a href="http://localhost:7882/viggyproject/adminlogin.php" style="float:right">LOGOUT</a>
</div>
<div class="header" style="border-radius:10px;">
<h2>MATERIALS DATA</h2>
</div>
<div class="row">
<div class ="card2"style="background-color:Beige;">
       <h2>Cotton Cloth
	   </h2>
	   <p><h3>Order Pending :16</h3>
       <h3>Order Delivered :22</h3>
	  </p>
    </div>
<div class ="card2"style="background-color:SteelBlue;">
       <h2>Denim Cloth </h2>
	   	  <p><h3>Order Pending :20</h3>
       <h3>Order Delivered :23</h3>	  
	   </p>
	</div>
<div class ="card2"style="background-color:GoldenRod;">
       <h2>Fabric Cloth </h2>
	   <p><h3>Order Pending :11</h3>
       <h3>Order Delivered :33</h3>	  	  
	   </p>
	</div>
<div class ="card2"style="background-color:IndianRed;">
       <h2>Leather Cloth </h2>
	   <p><h3>Order Pending :14</h3>
       <h3>Order Delivered :10</h3>	  	  
	   </p>
	</div>
<div class ="card2"style="background-color:MediumPurple;">
       <h2>Nylon Cloth </h2>
<p><h3>Order Pending :24</h3>
       <h3>Order Delivered :32</h3>	  	   </p>
</div>
<div class ="card2"style="background-color:OrangeRed;">
       <h2>Silk Cloth </h2>
<p><h3>Order Pending :10</h3>
       <h3>Order Delivered :43</h3>	  	   </p>
	</div>
<div class ="card2"style="background-color:RebeccaPurple;">
       <h2>Velvet Cloth </h2>
<p><h3>Order Pending :23</h3>
       <h3>Order Delivered :54</h3>	  	   </p>
	</div>
<div class ="card2"style="background-color:Turquoise;">
       <h2>Wool Cloth </h2>
<p><h3>Order Pending :16</h3>
       <h3>Order Delivered :11</h3>	  	   </p>
	</div>
<div class ="card2"style="background-color:Teal;">
       <h2>Linen Cloth </h2>
<p><h3>Order Pending :12</h3>
       <h3>Order Delivered :16</h3>	  	   </p>
	</div>
</div>

<footer class="footer-distributed" style="background-color:SandyBrown;">

			<div class="footer-left">
          <img src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px">
			<h3>	<span>NextDoor Invoice Processing</span></h3>
                <br>
				<p class="footer-company-name">© 2020 NextDoor Invoice Processing Pvt. Ltd.</p>
			</div>

			<div class="footer-center" style="text-color:black;">	
			<p class="footer-links ">
  <a href="http://localhost:7882/viggyproject/adminhome.php">Home</a>
  <a href="http://localhost:7882/viggyproject/Brreq.php">Branch Requests</a>
  <a href="http://localhost:7882/viggyproject/Orreq.php">Order Requests</a>
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

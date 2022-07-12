<?php
    session_start();
    require "dbconfig.php";
?>	



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mainstyles.css">
<link rel="stylesheet" href="animate.min.css">

</head>
<body >
<style>
.content {
  max-width: 500px;
  margin:auto;
  border-radius:10px;
  background: white;
  padding: 10px;
}
</style>
<!--
<div class="header">
  <h1>Next Door Textile Company</h1>
  <p><i>Our Cloth Knows the Artistic Neighbour</i></p>
  <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
    <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 <img src="https://previews.123rf.com/images/tabuday/tabuday1907/tabuday190700019/127918709-seamless-woodblock-printed-indigo-dye-ethnic-floral-border-traditional-oriental-ornament-of-india-fl.jpg" alt="textile photo"style="height:90px;width:200px">
 
</div>

<div class="topnav">
  <a href="http://localhost/viggyproject/home.php">HOME</a>
  <a href="http://localhost/viggyproject/matdept.php">MATERIALS</a>
  <a href="http://localhost/viggyproject/order.php">ORDER</a>
  <a href="http://localhost/viggyproject/branch.php">REGISTER YOUR BRANCH</a>
  <a href="http://localhost/viggyproject/viggylogin.php" style="float:right">LOGOUT</a>
<a href="#" style="float:right">SHIPMENT</a>
</div>
-->
<div class ="content"style="background-color:MediumSpringGreen;">
<center>

<img class="wow zoomIn" data-wow-duration="2s" data-wow-delay=".6s" src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px"> 

<form class="myform wow zoomIn" data-wow-duration="3s" data-wow-delay=".6s" action="brsuccess.php" method="post">
       <h2>Your Branch : <?php echo $_SESSION['brname']?>  has sent to Verification</h2>
	   <p><h3>If verified Your Branch id will be Shown in Order Page For Ordering</h3>	  
<a href="home.php"><input type ="button" id="order_btn" value="Back to Home"/><br></a>
</form>	  

	   </p>
	</div>
</center>
<!--
<div class="card2">
<center>
<h2> Your Branch has been registered Successfully </h2>
<h3> Your Branch id is </h3>
<form  class="myform wow fadeIn" data-wow-duration="3s" data-wow-delay=".6s" action="brsuccess.php" method="post">
<a href="home.php"><input type ="button" id="register_btn" value="Back to Home"/><br></a>
</form>
</center>
</div>
-->
<!--
<div class="footer"><i>
  <h2 style="text-align:left;">Next Door Textile Company.pvt.limited</h2>
  <h4 style="text-align:left;">Designed by Vignesh.g and Vanlaldika</h4>
</i>
</div>
-->
<script src="jquery.min.js" type="text/javascript">
</script>
<script src="wow.min.js">
</script>
<script>
new WOW().init(); 
</script>
</body>
</html>

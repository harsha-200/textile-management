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
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

<div class="header" style="border-radius:10px;">
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
  <a href="http://localhost:7882/viggyproject/adminhome.php">Home</a>
  <a href="http://localhost:7882/viggyproject/Brreq.php">Branch Requests</a>
  <a href="http://localhost:7882/viggyproject/Orreq.php">Order Requests</a>
  <a href="http://localhost:7882/viggyproject/adminlogin.php" style="float:right">LOGOUT</a>
</div>

<div class content style="border-radius:10px;background-color:sandybrown">
<center>
<div  class="container-fluid shadow bg-white" style="border-radius:10px;">
<h2 class="text-center">Pending Orders</h2>
<div class ="row">
<?php
	$query="select oid,bid,mtrorder,meters,status from orders where status='no'";
	$query_run=	mysqli_query($con,$query); 
	if(mysqli_num_rows($query_run)>0)
	{ while($row = $query_run->fetch_assoc()) {
?>
<div class="col-lg-3 your-element" style="margin:20px;border-radius:10px;"  data-tilt-scale="1.1">
   <div class="card shadow-lg mb-3 rounded-lg" style="background-color:#80ff80;" >
            <div class="card-body">
    <h3 class="card-title text-center">Material :<?php echo $row["mtrorder"] ;?></h4>
    <h3 class="card-title text-center"> No of Bundles :<?php echo $row['meters'];?></h5>
	<h3 class="card-title text-center"> Branch ID :<?php echo $row['bid'];?></h5>
<form class="myform" action="Orreq.php" method="post">
<input name="accept_btn" type ="Submit" id="login_btn" value="Accept"/><br>
<input type ="Submit" name="reject_btn" id="login_btn" value="Reject"/><br></a>
</form>
<?php
if(isset($_POST['accept_btn']))
{ $query1="UPDATE orders SET Status = 'yes' WHERE orders.oid = '$row[oid]'";
	$query_run1=mysqli_query($con,$query1); 
	if($query_run1){
	echo '<script type="text/javascript"> alert("the Order Has been Accepted!!!") </script>';
header('location:adminhome.php');	
}
else{
	echo '<script type="text/javascript"> alert("error occurred in accepting!!!") </script>';
}
}
elseif(isset($_POST['reject_btn']))
{
	$query1="DELETE FROM `orders` WHERE `orders`.`OID` = '$row[oid]'";
	$query_run1=mysqli_query($con,$query1); 
	if($query_run1){
	echo '<script type="text/javascript"> alert("the Order Has been Rejected!!!") </script>';
header('location:adminhome.php');
}
else{
	echo '<script type="text/javascript"> alert("error occurred in rjecting!!!") </script>';
}
}
?>

	</div>
 </div>
 </div>


<?php	

	}
        }
		else{
			echo '<script>alert("No Orders Found");</script>';
		}
ob_flush();
?>
</div>
</div>
</center>
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

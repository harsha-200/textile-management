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
<div class="card">
<center>
<h1>Branch Regitration</h1>
<img class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s" src="https://www.jing.fm/clipimg/detail/78-789981_shaking-hands-png-download-shaking-hands.png"alt="textile photo"style="height:200px;width:200px"> 
<form class="myform" action="branch.php" method="post">
<label><b>Enter Your Banch Name</b></label><br>
<input name="brname" type ="text" class="inputvalues" placeholder="Enter Your Banch Name" required/>
<br>
<label><b>Enter Your Phone Number</b></label><br>
<input name="brphone" type ="number" maxlength="10" class="inputvalues" placeholder="Type your phone number"required/>
<br>
<label><b>Enter your Branch Address</b></label><br>
<input name="braddress" type ="text" class="inputvalues" placeholder="format:#doornumber,street,district"required/>

<input name="register_btn" type ="Submit" id="register_btn" value="Register"/><br>
<br>
<br>
</center>
</form>
</div>
<?php
if (isset($_POST['register_btn']))
{
	//echo '<script type ="text/javascript">alert("Sign up button is clicked")</script>' ;
$brname = $_POST['brname'];
$brphone = $_POST['brphone'];
$braddress = $_POST['braddress'];
$x=0;
$query2="select * from branch WHERE brname='$brname' AND brphone='$brphone'";
    $query_run2=mysqli_query($con,$query2);
    if(mysqli_num_rows($query_run2)>0)
	{
		//user name already exists
	    echo '<script type ="text/javascript"> alert("This branch already exists...") </script>';
	}
else{
$bid=27;
while(true)
{
$query1="select bid from branch where bid='$bid'";
 $query_run1=mysqli_query($con,$query1);
 if(mysqli_num_rows($query_run1)>0)
 { 
	 $bid++;
	
 }
 else
 break;
}

	    $query ="insert into branch values('$bid','$brname','$braddress','$brphone','no')";
		$query_run = mysqli_query($con,$query);
		if($query_run)
		{echo '<script type="text/javascript"> alert("wait a minute") </script>';
			if($_SESSION['x']=1)
			{
		 $_SESSION['brname']=$brname;
		 $_SESSION['bid']=$bid;
	     header('location:brsuccess.php');
		}
		else{
echo '<script type="text/javascript"> Your branch Cannot be registered </script>';
}	
		}
		else
		{
		 echo '<script type="text/javascript"> alert("Error!!!") </script>';
		}
}
}
?>
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

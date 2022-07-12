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
<h1>Enter Your Order</h1>
<img class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s" src="https://img.freepik.com/free-vector/man-receives-parcel-flat-color-vector-illustration-getting-post-confirm-it-receiving-order-box-delivery-services-boy-sitting-box-isolated-cartoon-character_151150-309.jpg?size=338&ext=jpg"alt="textile photo"style="height:200px;width:200px"> 

<form  class="myform wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s" action="order.php" method="post">
<label><b>Enter The Material Name</b></label><br>
<input list="ClothMaterial" name="mtrorder" class="inputvalues"/>
    <datalist id="ClothMaterial">
    <option value="Cotton"/>
    <option value="Denim"/>
    <option value="Fabric"/>
    <option value="Leather"/>
    <option value="Linen"/>
	<option value="Nylon"/>
	<option value="Silk"/>
	<option value="Velvet"/>
	<option value="Wool"/>
  </datalist><br>
<label><b>Bundles</b></label><br>
<input name="meters" type ="text" class="inputvalues" placeholder="1 Bundle = ₹10"/>
<br>
<label><b>Enter The Branch Id</b></label><br>
<input name="bid" type ="number" class="inputvalues" placeholder="Enter the Branch id"/>
<br>
<input name="order" type ="Submit" id="order_btn" value="Place Order"/><br>
<br>
<?php
error_reporting(error_reporting() & ~E_NOTICE);
$x=$_SESSION['bid'];
if ($x=="")
{
?>
<label><b>If Your Branch is not registerd click On Branch Register button</b></label><br>
<a href="branch.php"><input name="brreg" type ="button" id="brreg_btn" value="Branch Register"/><br></a>
<?php
}
else {	
?>
<h3 style="color:#1e3d7b"> Branch Name : <?php echo $_SESSION['brname']?> <br> Bid: <?php echo $_SESSION['bid']?></h3>
<?php
}
if (isset($_POST['order']))
{
	//echo '<script type ="text/javascript">alert("Sign up button is clicked")</script>' ;
$mtrorder = $_POST['mtrorder'];
$meters = $_POST['meters'];
$bid = $_POST['bid'];
//have to write the code for duplicate branch id
$query2="select bid from branch where bid='$bid'";
 $query_run2=mysqli_query($con,$query2);
 if(mysqli_num_rows($query_run2)!=0)
 { 
$oid ='1XY10';
//for autogenrate order id values
$x=10;
$bill=$meters*10;
$_SESSION['meters']=$meters;
while(true)
{
$query1="select oid from orders where oid='$oid'";
 $query_run1=mysqli_query($con,$query1);
 if(mysqli_num_rows($query_run1)>0)
 { 
	 $x++;
	 $oid="1XY$x";
	 
 }
 else
 break;
}

//have to write the if condition
$orderdate=date("d/m/Y");
//$temp=5+date("d/m/y");
//$orderdeli="$temp/12/2020";
	    $query ="insert into orders values('$oid','$bid','$mtrorder','$meters','$orderdate','25/03/2020','no')";
		$query_run = mysqli_query($con,$query);
		
		if($query_run)
		{
		 $sid="2SD3000";
         $y=1;
		 while(true)
		 {
          $query3="select shipid from shipment where shipid='$sid'";
          $query_run3=mysqli_query($con,$query3);
          if(mysqli_num_rows($query_run3)>0)
         { 
	          $y++;
	          $sid="2SD300$y";
	 
         }
          else
          break;
        }
switch($mtrorder)
{
	case "Cotton":$codid=1227;
	break;
    case "Fabric":$codid=1228;
	break;
	case "Denim":$codid=1229;
	break;
	case "Nylon":$codid=1230;
	break;
   case "Velvet":$codid=1231;
	break;
	case "Silk":$codid=1232;
	break;
    case "Wool":$codid=1233;
	break;
	case "Leather":$codid=1234;
	break;
    case "Linen":$codid=1235;
	break;
    default:
	echo "mtrorder is only wrong";
}


/*
            $query4="select codid from coordinator where work_dept='$mtrorder'";
            $query_run4=mysqli_query($con,$query4);
            if($query_run4)
		    {
			  $codid="$query_run4";
		    }
            else{
				echo '<script type="text/javascript"> alert("Error in codid!!!") </script>';
			}				
*/
        $query5 ="insert into shipment values('$sid','$codid','$oid','$mtrorder','KA 02 SD 3467','$bid')";
		$query_run5 = mysqli_query($con,$query5);
		
		if($query_run5)
		{
		 echo '<script type="text/javascript">alert("shipment also updated!!!")</script>';		
		}
		else{
			 echo '<script type="text/javascript"> alert("Error in shipment!!!") </script>';
		}
		 header('location:order_success.php');
		}
		
		else
		{
		 echo '<script type="text/javascript"> alert("Error!!!") </script>';
		}
		
}

else{
echo'<script type ="text/javascript"> alert("You Have entered invalid branch id do register your branch if not...") </script>';
}
}
?>
</form>
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

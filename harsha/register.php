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
<body class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

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

<div class="card">
<center>
<h1> Register</h1>
<img src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px"> 

<form class="myform" action="register.php" method="post">
<label><b>Username:</b></label><br>
<input name="username" type ="text" class="inputvalues" placeholder="Type your username" required/>
<br>
<label><b>Password:</b></label><br>
<input name="password" type ="password" class="inputvalues" placeholder="Type your password"required/>
<br>
<label><b>Confirm Password:</b></label><br>
<input name="cpassword" type ="password" class="inputvalues" placeholder="Confirm your password"required/>

<input name="submit_btn" type ="Submit" id="signup_btn" value="Sign Up"/><br>
<br>
<a href="viggylogin.php"><input type ="button" id="back_btn" value="Back to login"/><br></a>
<br>
</form>
<?php

if (isset($_POST['submit_btn']))
{
	//echo '<script type ="text/javascript">alert("Sign up button is clicked")</script>' ;
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password ==$cpassword)
{
	$query="select * from userinfo WHERE username='$username'";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
	{
		//user name already exists
	    echo '<script type ="text/javascript"> alert("user already exits... try another username") </script>';
	}
	else
	{
	    $query ="insert into userinfo values('$username','$password')";
		$query_run = mysqli_query($con,$query);
		
		if($query_run)
		{
		 echo'<script type ="text/javascript"> alert("user registered.. go to login page") </script>';
		}
		else
		{
		 echo '<script type="text/javascript"> alert("Error!!!") </script>';
		}
}	
}
else {
 		 echo '<script type="text/javascript"> alert("password is not matching with the confirm password") </script>';
}
}
?>

</center>
</div>
 <script src="jquery.min.js" type="text/javascript"></script>
<script src="wow.min.js"></script>
<script>
new WOW().init(); 
</script>


</body>
</html>















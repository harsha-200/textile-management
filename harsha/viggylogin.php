<?php
    session_start();
    require "dbconfig.php";
?>	

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mainstyles.css">
<link rel="stylesheet" href="animate.min.css">
<style>
</style>
</head>
<body class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">

<div class="header">
  <h1>Next Door Invoice Processing</h1>
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
<h1> Login</h1>
<img class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s" src="https://i.pinimg.com/564x/2b/7d/e6/2b7de674c52692ae5887e9ab55cf7455.jpg"alt="textile photo"style="height:200px;width:200px"> 

<form  class="myform wow fadeIn" data-wow-duration="3s" data-wow-delay=".6s" action="viggylogin.php" method="post">
<label><b>Username:</b></label><br>
<input name="username" type ="text" class="inputvalues" placeholder="Type your username"/>
<br>
<label><b>Password:</b></label><br>
<input name="password" type ="password" class="inputvalues" placeholder="Type your password"/>
<br>
<input name="login" type ="Submit" id="login_btn" value="Login"/><br>
<br>
<a href="register.php"><input type ="button" id="register_btn" value="Register"/><br></a>
<br>
</form>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from userinfo WHERE username='$username' AND password='$password'";
    $query_run=	mysqli_query($con,$query); 
	if(mysqli_num_rows($query_run)>0)
	{ //valid
	$_SESSION['username']=$username;
	header('location:home.php');
	}
	else
	{   //invalid
		echo '<script type ="text/javascript"> alert("invalid credentials")</script>';
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















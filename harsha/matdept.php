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
</div></div>
<div class="header">
<h2>MATERIALS WE MANUFACTURE</h2>
</div>
<div class="row">
  <div class="leftcolumn">
       <div class="card">
	        <h1>About us</h1>
			<p style="indent-text:5em;"><h3>Next Door Textile Company Pvt. Ltd. is an Integrated Textile Manufacturing unit with more than three decades of strong foundation and a comprehensive healthy growth rate. Today, Next Door Textile company is an established name to reckon in Karnataka.</h3></p>
       </div>
</div>
	   <img src="https://textilevaluechain.in/wp-content/uploads/2020/08/Textile-Manufacturing.jpeg"alt="textile photo"style="height:400px;width:420px;"> 
	   <img src="https://blog.thomasnet.com/hubfs/shutterstock_1634572060.jpg"alt="textile photo"style="height:400px;width:420px;"> 
	<div class="rightcolumn">
       <div class="card">
	        <h1>Manufacturing Unit</h1>
			<p><h3>We have seperate manufacturing units to every production we do and each manufacturing unit is dedicated to give it's best quality.Our unit is vast around 500 acres and well equiped with all latest technology eqiupments</h3></p>
       </div>
  </div>
 </div>
 <div class="row">
<div class="card" style="background-color:MediumSpringGreen;">
        <h1 style="text-align:center;">Products</h1>
</div>
<div class ="card2"style="background-color:Beige;">
       <h2>Cotton Cloth
	   </h2>
	   <p><h3>The most important quality property of cotton is its staple length, i.e. the length of the individual fibres the fabric consists of.</p><p>We use the
long cotton fibres which is generally considered to be of a higher quality than short cotton fibres</h3>	  
<img src="https://images-na.ssl-images-amazon.com/images/I/41Tw3rnx2tL.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	  </p>
    </div>
<div class ="card2"style="background-color:SteelBlue;">
       <h2>Denim Cloth </h2>
	   <p><h3>We produce a high quality of denim specifically where good quality jeans are made from a stronger, heavier weight of denim</p><p>Over the years Denim cloth is having high production in our company due to the fashionable demand for our quality </h3>	  
<img src="https://static.fibre2fashion.com/MemberResources/LeadResources/8/2018/10/Seller/18155893/Images/18155893_0_denim-fabric-1.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  

	   </p>
	</div>
<div class ="card2"style="background-color:GoldenRod;">
       <h2>Fabric Cloth </h2>
	   <p><h3>When it comes to fabric we make the finest clothing to our customers and our fabrics are made of both man-made and natural fibres.</p><p> The woven type fabric is always in demand due to the quality we make is no match in the market around the state</h3>	  
<img src="https://images-na.ssl-images-amazon.com/images/I/61A8WC1fmrL._SL1024_.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  

	   </p>
	</div>
<div class ="card2"style="background-color:IndianRed;">
       <h2>Leather Cloth </h2>
	   <p><h3>Our Leather Cleaning Cloth is a soft microsuede fabric that can be used in conjunction with our Leather Conditioner to add polish to leather goods that have faded over the years. .</p><p> So Quality of leather we use are very rare and too versatile</h3>	  
<img src="https://tiimg.tistatic.com/fp/1/006/381/pvc-leather-cloth-570.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>
<div class ="card2"style="background-color:MediumPurple;">
       <h2>Nylon Cloth </h2>
	   <p><h3>When it comes to stretchable textiles, nothing beats nylon. It's perfect for making stretchy, durable fabric.</p><p> In fact, nylon is widely known for its ability to stretch like a rubber band and still retain its original shape.So do Buy Our Nylon Clothes</p></h3>	  
<img src="https://cdn.shopify.com/s/files/1/0019/8541/3229/products/skyblueltdswim_1of1_1800x1800.jpg?v=1598146900" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>
<div class ="card2"style="background-color:OrangeRed;">
       <h2>Silk Cloth </h2>
	   <p><h3>Silk having a delicate appearance, it is relatively robust. Its smooth surface resists soil and odors well. Silk is wrinkle and tear resistant.</p><p>About our Silk which has been reamrked it's name in the market by this time you would have heard </h3>	  
<img src="https://images-na.ssl-images-amazon.com/images/I/712zFJVMiTL._SL1500_.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>
<div class ="card2"style="background-color:RebeccaPurple;">
       <h2>Velvet Cloth </h2>
	   <p><h3>Want to decorate your interiors in a different style? Then you should definitely use velvet fabrics this season.</p><p> This is only because velvet is soft in nature and available in different colours. It gives any room that luxury feeling. This fabric is always outstanding and beautiful,So do order  </p></h3>	  
<img src="https://images-na.ssl-images-amazon.com/images/I/71sue6qchSL._AC_SL1000_.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>
<div class ="card2"style="background-color:Turquoise;">
       <h2>Wool Cloth </h2>
	   <p><h3>Wool being a complex fibre making it one of the most versatile and functional animal products. One of that humans have been utilising for thousands of years because of the many benefits this remarkable fibre offers</p><p> So do buy our Wool Cloth and experience the Quality we offer </h3>	  
<img src="https://ae01.alicdn.com/kf/HTB1GE8uXInrK1RkHFrdq6xCoFXa2/JaneYU-Black-gray-knitting-wool-woollen-Cloth-skirt-fabric-Half-Meter-50x160cm.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>
<div class ="card2"style="background-color:Teal;">
       <h2>Linen Cloth </h2>
	   <p><h3>Linen is considered to be the strongest of all natural fibres, and it's even been found to get stronger with washes..</p><p>  Linen clothing will last for many Summer seasons to come, making it a perfect addition to any conscious, capsule wardrobe. So do order our Linen Cloth</h3>	  
<img src="https://www.fabrichouse.com.au/wp-content/uploads/2017/12/Camel-Belgian-Linen.jpg" alt="textile photo"style="height:200px;width:200px;vertical-align:middle;">	   
<form>
<a href="order.php"><input type ="button" id="order_btn" value="Order Now"/><br></a>
</form>	  
	   </p>
	</div>

	
	
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

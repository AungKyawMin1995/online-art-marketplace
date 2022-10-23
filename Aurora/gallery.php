<?php
	session_start();

	$cname=$_SESSION['cname'];
	$_SESSION['cname']=$cname;

	include("DBconnection.php");
	$cart = 0;
  	
  	if(isset($_SESSION['cart'])) {
    	foreach($_SESSION['cart'] as $qty) {
      		$cart += $qty;
    	}
  	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drawing Gallery</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/login.js"></script>
</head>
<body>

	<div id="container">

		<header>
			
			<div id="logo">
				<img src="images/system/logo.png" alt="">
				<h1>Aurora</h1>
			</div>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="help.docx">Help</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>

		</header>

		<div id="content">
			
			<div id="sidebar">
				
				<div id="partners">
					
					<div class="title">
						<img src="images/system/partners.png" alt="">
						<h2>Our Partners</h2>
					</div>
					<ul>
						<li><a href=""><b>China</b>, Beijing <span>&raquo;</span> </a></li>
						<li><a href=""><b>Thai</b>, Bangkok <span>&raquo;</span> </a></li>
						<li><a href=""><b>India</b>, New Delhi <span>&raquo;</span></a></li>
						<li><a href=""><b>Korea</b>, Seoul <span>&raquo;</span></a></li>
						<li><a href=""><b>England</b>, London <span>&raquo;</span></a></li>
						<li><a href=""><b>Germany</b>, Berlin <span>&raquo;</span></a></li>
						<li><a href=""><b>Russia</b>, Moscow <span>&raquo;</span></a></li>
						<li><a href=""><b>United States</b> <span>&raquo;</span></a></li>
					</ul>	

				</div>

				<div id="useful">
					
					<div class="title">
						<img src="images/system/link.png" alt="">
						<h2>Our Links</h2>	
					</div>

					<ul>
						<li><a href="">www.aurora.com <span>&raquo;</span></a></li>
						<li><a href="">www.77arts.com <span>&raquo;</span></a></li>
						<li><a href="">www.usaps.com <span>&raquo;</span></a></li>
						<li><a href="">www.gloarts.com <span>&raquo;</span></a></li>
					</ul>

				</div>
				
				

			</div>
			


			<div id="gallery">

				<div id="count">
				
					<img src="images/system/cart.png">
					<p><?php echo $cart ?></p>
					<a href="view_cart.php"></a>

					<div class="clear"></div>

				</div>

					<?php

						include "DBconnection.php";

						$sql = "SELECT * FROM drawing";
						$result = mysqli_query($conn,$sql);
						$num =  mysqli_num_rows($result);

						$i=0;
						if($num !=0){
							
							echo "<br>";
							while ($row = mysqli_fetch_assoc($result)) {					
								if(!($i%4)){
									echo "<div id='row'>";
								}	

								echo "<div id ='box'>";

								echo "<span>$ ".$row['Price']."</span>";
								echo "<img src='images//".$row['DrawingPicture']."'>";
								echo "<a href='add-to-cart.php?id=".$row['DrawingID']."' class='add-to-cart'>Add to Cart</a>";


								echo "</div>";

								if(!(($i+1)%4) || $num == $i+1){
									echo "</div>";
								}
								
								$i++;
							}
						}

					?> 				

			</div>
			<div class="clear"></div>
		</div>

		<footer>
			<div id="foot">
				<p>Copyright © 2015 "Aurora" Online Pictures and Drawings Selling System. All rights reserved.</p>
			
				<div id="ico">
					<a href=""><img src="images/system/foot.jpg" alt=""></a>
				</div>
			</div>
		</footer>

	</div>

</body>
</html>
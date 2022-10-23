<?php
 	session_start();

  	$cname=$_SESSION['cname'];
	$_SESSION['cname']=$cname;

  	if(!isset($_SESSION['cart'])) {
    	header("location: gallery.php");
    	exit();
  	}

  	include("DBconnection.php");
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Your Cart</title>
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
				<li><a href="about.php">About Us</a></li>
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

			<div id="view_cart">
				<div id="menu">
					<div id="continue">
						<p class="shopping">&laquo; Continue Shopping</p>
						<a href="gallery.php"></a>
					</div>

					<div id="del">
						<p class="dele">&times; Clear Cart</p>
						<a href="clear_cart.php"></a>
					</div>

					<div class="clear"></div>

				</div>

				<table>
			      <tr>
			        <th>Drawing Image</th>
			        <th>Drawing Type</th>
			        <th>Quantity</th>
			        <th>Unit Price</th>
			        <th>Price</th>
			      </tr>

			      <?php
			        $total = 0;
			        foreach($_SESSION['cart'] as $id => $qty):
			        	$sql = "SELECT * FROM drawing WHERE DrawingID=$id";
			        	$result = mysqli_query($conn,$sql);
			        	$row = mysqli_fetch_assoc($result);
			        	$total += $row['Price'] * $qty;
			      ?>

			      <tr>
			        <td class="image"><?php echo "<img src='images//".$row['DrawingPicture']."'>"; ?></td>
			        <td><?php echo $row['DrawingType'] ?></td>
			        <td><?php echo $qty ?></td>
			        <td>$<?php echo $row['Price'] ?></td>
			        <td>$<?php echo $row['Price'] * $qty ?></td>
			      </tr>

			      <?php endforeach; ?>

			      <tr>
			        <td colspan="4" align="right" class="total"><b>Total:</b></td>
			        <td class="total">$<?php echo $total; ?></td>
			      </tr>
    			</table>

    			<div id="order-form">
    				
					<h2>Order Now</h2>

			      		<?php

			      			$_SESSION['total']=$total;

			      			$sql = "SELECT * FROM customer WHERE CustName='$cname'";
			      			$result = mysqli_query($conn,$sql);
			      			$row = mysqli_fetch_array($result);
			      				
						        echo "<label for='name'>Your Name:</label>";
						        echo "<div class='info'>".$row['CustName']."</div>";

						        echo "<label for='email'>Email:</label>";
						        echo "<div class='info'>".$row['CustEmail']."</div>";

						        echo "<label for='phone'>Phone:</label>";
						        echo "<div class='info'>".$row['CustPhno']."</div>";

						        echo "<label for='address'>Address:</label>";
						        echo "<div class='info'>".$row['CustAddress']."</div>";

						        echo "<br><br>";
				        		echo "<a href='submit-order.php?cid=".$row['CustID']."'><input type='button' value='Submit Order'></a>";
					    	
				        ?>

				        

    			</div>

    			<div class="clear"></div>

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
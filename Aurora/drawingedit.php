<?php
	session_start();
	include "DBconnection.php";

	$did = $_GET['id'];

	$_SESSION['did']=$did;

	$sql = "SELECT * FROM drawing WHERE DrawingID=$did";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);

	$type = $row['DrawingType'];
	$price = $row['Price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drawing Editing</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/login.js"></script>
</head>
<body>

	<div id="container">

		<header>
			
			<div id="logo">
				<img src="images/logo.png" alt="">
				<h1>Aurora</h1>
			</div>

			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="login.php">Log In</a></li>
				<li><a href="report.php">Reports</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="help.docx">Help</a></li>
				<li><a href="alogout.php">Log Out</a></li>
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

			<div id="drawing">				
				<div id="drawingform">
					<h3>Drawing Editing Form</h3>
					<form action="drawingeditDB.php" method="post">
						<label for="type">Drawing Type:</label>
						<input type="text" name="type" value="<?php echo $type; ?>">
						<label for="price">Drawing Price:</label>
						<input type="text" name="price" id="price" value="<?php echo $price; ?>">
						<label for="picture">Drawing Image:</label>
						<input type="file" name="picture">
						<input type="submit" value="EDIT DRAWING">
					</form>


				</div>

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
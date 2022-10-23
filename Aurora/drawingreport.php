<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drawing Report</title>
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
				<li><a href="login.php">Log In</a></li>
				<li><a href="report.php">Reports</a></li>
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

			<div id="drawingreport">

				<h1>Drawing Report</h1>

				<div id="report">
						<p>&laquo; Other Reports</p>
						<a href="report.php"></a>
					</div>

					<?php
						include "DBconnection.php";

						$sql =  "SELECT * FROM drawing";
						$result = mysqli_query($conn,$sql);
						$num = mysqli_num_rows($result);

						if($num==0){
							echo "<div class='noorder'><h2>No Results Found !</h2></div>";
						}
						else{
							echo "<table>";
							echo "<tr>";
							echo "<th>ID</th>";
							echo "<th>Drawing</th>";
							echo "<th>Drawing Type</th>";
							echo "<th>Price</th>";
							echo "</tr>";

							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>".$row['DrawingID']."</td>";
								echo "<td><img src='images//".$row['DrawingPicture']."'></td>";
								echo "<td>".$row['DrawingType']."</td>";
								echo "<td>$".$row['Price']."</td>";

								echo "<td><a href='drawingedit.php?id=".$row['DrawingID']."'><button class='edit'>Edit</button></a>";
								echo "<a href='drawingremove.php?id=".$row['DrawingID']."'><button>&times; Remove</button></a></td>";

								echo "</tr>";
							}

							echo "</table>";
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
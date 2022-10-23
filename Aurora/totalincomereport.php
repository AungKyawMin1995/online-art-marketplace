<?php
	$mont = $_POST['mont'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Total Income Report</title>
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

			<div id="incomereport">

				<h1>Total Income Report for <?php echo $mont; ?></h1>

				<div id="report">
					<p>&laquo; Other Reports</p>
					<a href="report.php"></a>
				</div>

				<form action="totalincomereport.php" method="post">
					<select name="mont">
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>

					<input type="submit" value="Search">
				</form>
				
				<?php
						include "DBconnection.php";

						$sql =  "SELECT * FROM orders WHERE Status='Confirmed' && Month='$mont'";
						$result = mysqli_query($conn,$sql);
						$num = mysqli_num_rows($result);

						$sql2 = "SELECT SUM(TPrice) AS Totl FROM orders WHERE Status='Confirmed' && Month='$mont'";
						$result2 = mysqli_query($conn,$sql2);
						$row1 = mysqli_fetch_array($result2);
						$total = $row1['Totl'];

						if($num==0){
							echo "<div class='noorder'><h2>No Results Found !</h2></div>";
						}

						else{
							echo "<table>";
							echo "<tr>";
							echo "<th>Order ID</th>";
							echo "<th>Month</th>";
							echo "<th>Customer Name</th>";
							echo "<th>Total Price</th>";
							echo "</tr>";

							while ($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								
								echo "<td>".$row['OrderID']."</td>";
								echo "<td>".$row['Month']."</td>";
								echo "<td>".$row['CustName']."</td>";
								echo "<td>$ ".$row['TPrice']."</td>";

								echo "</tr>";
							}

							echo "<tr>";
			        		echo "<td colspan='3' align='right' class='total'><b>Total Income for this month:</b></td>";
			        		echo "<td class='total'><b>$ ".$total."</b></td>";
			      			echo "</tr>";

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
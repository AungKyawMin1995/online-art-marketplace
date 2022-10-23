<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator Log In</title>
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
				<li><a href="adminlogin.php">Admin</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="help.docx">Help</a></li>
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

			<div id="adminform">

				<h1>&laquo; Administrator Log In &raquo;</h1>

				<p class="awarn">* Administrator Username and Password must be used to log in !</p>

				<div id="login">
					<p id="aerror"></p>
					<form name="adminform" method="post">
							<input type="text" placeholder="UserName" name="adname">
							<input type="password" placeholder="Password" name="adpassword">
							<input type="button" value="LOG IN" onclick="alogin()">
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
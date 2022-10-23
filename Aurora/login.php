<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
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

			<div id="loginform">
					
				<div id="customerlogin">
					
					<h4> Registered Customers</h4>
					<p>Registered customer must log in here !</p>
					<p>Not registered yet? Register <a href="register.php"><span style="color:red;">here !</span></a></p>
					<div id="customerloginform">
						<h3>Customer Log in Form</h3>
						<p id="cerror"></p>
						<form name="clform" method="post">
							<input type="text" placeholder="UserName" name="cname">
							<input type="password" placeholder="Password" name="cpassword">
							<input type="button" value="LOG IN" onclick="clogin()">
						</form>
					
						<div class="clear"></div>
					</div>
					

				</div>


				<div id="stafflogin">
					
					<h4>Our Staffs</h4>
					<p>Staff must register in order to register drawings.</p>
					<p>Not registered yet? Register <a href="register.php"><span style="color:red;">here !</span></a></p>
					<div id="staffloginform">
							<h3>Staff Log In Form</h3>
							<p id="serror"></p>
							<form name="slform" method="post">
								<input type="text" placeholder="Name" name="sname">
								
								<select name="sdepart" id="">
									<option name="Department 1" value="Department 1">Department 1</option>
									<option name="Department 2" value="Department 2">Department 2</option>
									<option name="Department 3" value="Department 3">Department 3</option>
									<option name="Department 4" value="Department 4">Department 4</option>
								</select>

								<input type="password" placeholder="Password" name="spassword">
								<input type="button" value="LOG IN" onclick="slogin()">
							</form>
					</div>

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
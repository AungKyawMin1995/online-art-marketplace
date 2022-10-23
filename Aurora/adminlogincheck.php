<?php
	$aname = $_POST['adname'];
	$apass = $_POST['adpassword'];

	$name = "admin";
	$pass = "akm123";

	if($aname == $name && $apass == $pass){
		header("location:report.php");
	}

	else{
?>

	<script type="text/javascript">
	         alert("Username or Password is incorrect!");
	         window.location.href="adminlogin.php";
   	</script>
<?php } ?>
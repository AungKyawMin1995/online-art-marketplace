<?php
	
	session_start();

	include("DBconnection.php");

	$cname = $_POST['cname'];
	$_SESSION['cname']=$cname;
	$cpassword = $_POST['cpassword'];

	$sql = "select * from customer where CustName='$cname' and CustPassword='$cpassword'";
	$result = mysqli_query($conn,$sql);
	$rowCount = mysqli_num_rows($result);

	if($rowCount > 0){
		header("location:gallery.php");
	}

	else{

?>
		<script type="text/javascript">
	         alert("You haven't registered ! Please Register !");
	         window.location.href="register.php";
    	 </script>
<?php } ?>

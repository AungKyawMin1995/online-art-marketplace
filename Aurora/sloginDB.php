<?php

	session_start();

	include("DBconnection.php");

	$sname = $_POST['sname'];
	$_SESSION['sname']=$sname;

	$sdepart = $_POST['sdepart'];
	$spassword = $_POST['spassword'];

	$sql = "select * from staff where StaffName='$sname' and StaffDepartment='$sdepart' and StaffPassword='$spassword'";
	$result = mysqli_query($conn,$sql);
	$rowCount = mysqli_num_rows($result);

	if($rowCount > 0){
		header("location:register_drawing.php");
	}

	else{
?>
		<script type="text/javascript">
	         alert("You haven't registered ! Please Register !");
	         window.location.href="register.php";
    	 </script>

<?php } ?>
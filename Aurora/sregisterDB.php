<?php
	include "DBconnection.php";

	$sname = $_POST["sname"];
	$semail = $_POST["semail"];
	$sdepart = $_POST["sdepart"];
	$spassword = $_POST["spassword"];

	$sql1 = "SELECT * FROM staff WHERE StaffName='$sname' && StaffEmail='$semail'";
	$result = mysqli_query($conn,$sql1);
	$res = mysqli_num_rows($result);
	if ($res > 0) {
?>
		<script type="text/javascript">
			alert("Staff username is already exist! Please Try Again!");
	        window.location.href="register.php";
		</script>
	

<?php
	}
	else{
         
        $sql2 = "INSERT INTO staff(StaffName,StaffEmail,StaffDepartment,StaffPassword) VALUES ('$sname','$semail','$sdepart','$spassword')";

		$result =mysqli_query($conn,$sql2);
        if($result){
?>
       	<script type="text/javascript">
			alert("Staff Registration Successful !");
	        window.location.href="login.php";
		</script>
<?php
        }
        else header("location:register.php");
    }
?>
<?php
	include "DBconnection.php";

	$cname = $_POST["cname"];
	$cemail = $_POST["cemail"];
	$cphno = $_POST["cphno"];
	$caddress = $_POST["caddress"];
	$cpassword = $_POST["cpassword"];

	$sql1 = "SELECT * FROM customer WHERE CustName='$cname' && CustEmail='$cemail'";
	$result = mysqli_query($conn,$sql1);
	$res = mysqli_num_rows($result);
	if ($res > 0) {
?>
		<script type="text/javascript">
			alert("Username is already exist! Please Try Again!");
	        window.location.href="register.php";
		</script>
	

<?php
	}
	else{
         
        $sql2 = "INSERT INTO customer(CustName,CustEmail,CustPhno,CustAddress,CustPassword) VALUES ('$cname','$cemail','$cphno','$caddress','$cpassword')";

		$result =mysqli_query($conn,$sql2);
        if($result){
?>
        <script type="text/javascript">
			alert("Customer Registration Successful !");
	        window.location.href="login.php";
		</script>
<?php
	}
        else header("location:register.php");
    }

?>

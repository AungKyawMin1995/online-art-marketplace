<?php
	include "DBconnection.php";

	$oid = $_GET['id'];

	$sql = "DELETE FROM order_drawing WHERE OrderID=$oid";
	$result = mysqli_query($conn,$sql);

	$sql = "DELETE FROM orders WHERE OrderID=$oid";
	$result = mysqli_query($conn,$sql);
?>
	<script type="text/javascript">
		alert("Removal Successful !");
	    window.location.href="orderreport.php";
	</script>

<?php
	include "DBconnection.php";

	$oid = $_GET['id'];

	$sql = "UPDATE orders
			SET Status='Confirmed'
			WHERE OrderID=$oid";

	$result =  mysqli_query($conn,$sql);
?>
	
	<script type="text/javascript">
		alert("Confirmation Successful !");
	    window.location.href="orderreport.php";
	</script>
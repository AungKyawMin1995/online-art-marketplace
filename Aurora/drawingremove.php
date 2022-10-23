<?php
	include "DBconnection.php";

	$did = $_GET['id'];

	
	$sql = "DELETE FROM order_drawing WHERE DrawingID=$did";
	$result = mysqli_query($conn,$sql);
	
	$sql = "DELETE FROM drawing WHERE DrawingID=$did";
	$result = mysqli_query($conn,$sql);

?>
	<script type="text/javascript">
		alert("Removal Successful !");
	    window.location.href="drawingreport.php";
	</script>

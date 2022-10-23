<?php
	include "DBconnection.php";

	$sql = "SELECT * FROM drawing";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);

	$arr = mysqli_fetch_assoc($result);


?>
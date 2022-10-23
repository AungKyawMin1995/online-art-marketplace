<?php
	session_start();
	include "DBconnection.php";


	$did = $_SESSION['did'];
	$dtype = $_POST['type'];
	$dprice = $_POST['price'];
	$dpic = $_POST['picture'];

	
	$sql = "UPDATE drawing
			SET DrawingPicture='$dpic',DrawingType='$dtype',Price='$dprice'
			WHERE DrawingID=$did";
	$result = mysqli_query($conn,$sql);

	if ($result) {
?>
	<script type="text/javascript">
	         alert("Drawing have been edited !");
	         window.location.href="drawingreport.php";
    </script>
<?php } ?>

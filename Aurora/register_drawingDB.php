<?php
	include("DBconnection.php");
	$type = $_POST["type"];
	$price = $_POST["price"];
	$picture = $_POST["picture"];

	$sql = "INSERT INTO drawing(DrawingPicture,DrawingType,Price) VALUES ('$picture','$type','$price')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
?>
	<script type="text/javascript">
		alert("Drawing Registration Successful !");
	    window.location.href="register_drawing.php";
	</script>

<?php } ?>

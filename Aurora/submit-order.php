<?php
	session_start();
	include "DBconnection.php";

	$cid = $_GET['cid'];
	$total = $_SESSION['total'];
	$date = date("d-m-Y");
	$month = date("F");

	$sql = "SELECT CustName from customer WHERE CustID=$cid";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	$custname = $row['CustName'];

	
	$sql = "INSERT INTO orders(OrderDate,Month,CustName,TPrice,Status) VALUES('$date','$month','$custname','$total','Not Confirmed')";
	$result = mysqli_query($conn,$sql);

	$oid = mysqli_insert_id($conn);

	foreach($_SESSION['cart'] as $id => $qty) {
    	mysqli_query($conn,"INSERT INTO order_drawing (OrderID,DrawingID,Qty) VALUES ($oid,$id,$qty)");
  	}

  unset($_SESSION['cart']);

?>

<script type="text/javascript">
		alert("Your order has been submitted !");
	    window.location.href="gallery.php";
</script>


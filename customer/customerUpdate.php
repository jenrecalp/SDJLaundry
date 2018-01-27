<?php
$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');

$idc= $_REQUEST['id'];
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$it=$_POST['item_type_id'];
$iq=$_POST['item_qty'];
$ct=$_POST['customer_type_id'];

$query = "UPDATE transaction SET firstname='$fn', lastname='$ln',item_type_id='$it', item_qty='$iq',customer_type_id='$ct' where id=$idc";
	if (mysqli_query($con, $query)) {
		echo "<script>alert('Successfully Updated');window.location.href='index.php';</script>";
	}
	else{
		echo "<script>alert('Connection Failed'); windows.location.href='index.php';</script>";	
	}
?>
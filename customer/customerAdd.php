<?php

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$it=$_POST['item_type_id'];
$iq=$_POST['item_qty'];
$ct=$_POST['customer_type_id'];


if(empty($fn) || empty($ln) || empty($it) || empty($iq) || empty($ct)
	{
		echo "<script>alert('fill all the fields');window.location.href='index.php';</script>";
	}
else
	{
		$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
		$query = "INSERT INTO transaction (firstname, lastname, item_type_id, item_qty, customer_type_id) VALUES ('$fn', '$ln', '$it', '$iq', '$ct');";
		if (mysqli_query($con, $query)) {
			echo "<script>alert('successfully added');window.location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='index.php';</script>";
		}
	}

?>


<?php
$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
$idp= $_REQUEST['id'];

$query = "delete  FROM item_type where id=$idp";
		if (mysqli_query($con, $query)) {
			echo "<script>alert('Successfully Deleted ');window.location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='index.php';</script>";
		}
?>


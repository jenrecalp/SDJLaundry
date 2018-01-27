<?php
$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
$ids= $_REQUEST['id'];

$query = "delete  FROM staff where id=$ids";
		if (mysqli_query($con, $query)) {
			echo "<script>alert('Successfully Deleted ');window.location.href='staffIndex.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='staffIndex.php';</script>";
		}
?>

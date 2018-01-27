<?php
$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');

$idp= $_REQUEST['id'];
$nm=$_POST['name'];
$pr=$_POST['price'];
$sk=$_POST['stocks'];

$query = "UPDATE item_type SET name='$nm',price='$pr',stocks='$sk' where id=$idp";
	if (mysqli_query($con, $query)) {
		echo "<script>alert('Successfully Updated');window.location.href='index.php';</script>";
	}
	else{
		echo "<script>alert('Connection Failed'); windows.location.href='index.php';</script>";	
	}
?>
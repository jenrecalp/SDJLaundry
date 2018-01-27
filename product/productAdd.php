<?php

$nm=$_POST['name'];
$pr=$_POST['price'];
$sk=$_POST['stocks'];


if(empty($nm) || empty($pr) || empty($sk)
	{
		echo "<script>alert('fill all the fields');window.location.href='index.php';</script>";
	}
else
	{
		$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
		$query = "INSERT INTO item_type (name, price, stocks, created_at, updated_at) VALUES ('$nm', '$pr', '$sk', '$ca', '$ua');";
		if (mysqli_query($con, $query)) {
			echo "<script>alert('successfully added');window.location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='index.php';</script>";
		}
	}

?>




<?php 

if (isset($_POST['submit'])) {
	$us = $_POST['username'];
	$ps = $_POST['password'];
	// $a = $_GET['is_admin'];
	
	
		$con = mysqli_connect('localhost','root','','sdjlaundry');
		$query = "SELECT * from staff where username = '$us' and password = '$ps'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		// $b = mysqli_fetch($query);

		if ($num >0) {

			$finduser = mysqli_fetch_assoc($result);

			$password = $finduser['password'];
			$username = $finduser['username'];
			$admin = $finduser['is_admin'];
			

				if ($finduser > 0) {
					session_start();
					$_SESSION['username'] = $finduser['username'];
					$_SESSION['password'] = $finduser['password'];
					$_SESSION['is_admin'] = $finduser['is_admin'];

					if ($admin == 1) {
						echo "<script>alert('Welcome admin' );window.location.href='admin/staffIndex.php'</script>";
					}
					elseif ($admin == 0) {
						echo "<script>alert('Success');window.location.href='admin/staffIndex.php'</script>";
					}
				}
				else
				{
					echo "<script>alert('Error');window.location.href='index.php'</script>";	
				}
		}
	}

 ?>
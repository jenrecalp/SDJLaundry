<?php
if(isset($_POST['submit']))
{
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$ag=$_POST['age'];
$cn=$_POST['contact_no'];
$bd=$_POST['birthday'];
$ad=$_POST['address'];
$un=$_POST['username'];
$pw=$_POST['password'];



		$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
		$query = "INSERT INTO staff (firstname, lastname, email,age, contact_no, birthday, address, username, password, created_at, updated_at, is_admin) VALUES ('$fn', '$ln', '$em', '$ag', '$cn', '$bd', '$ad', '$un',  md5('$pw'), CURRENT_TIMESTAMP,CURRENT_TIMESTAMP, '0');";
		if (mysqli_query($con, $query)) {
			echo "<script>alert('successfully added');window.location.href='staffIndex.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='staffIndex';</script>";
		}
	}
	
?>

<?php include '../header.php' ?>

	<form method = "POST" action = "" >
		Firstname: <input type = "text" name = "firstname" required><br>
		Lastname: <input type = "text" name = "lastname"c required><br>
		Email: <input type = "email" name = "email" required><br>
		Age: <input type = "text" name = "age" required><br>
		Contact Number: <input type = "text" name = "contact_no" required ><br>
		Birthday: <input type = "date" name = "birthday" required><br>
		Address: <input type = "text" name = "address" required><br>
		Username: <input type = "text" name = "username" required><br>
		Password: <input type = "password" name = "password" required><br>
		<button type = "submit" name ="submit" >Submit</button>
	</form>
	<br>
	<br>
	<br>

<button><a href = "staffIndex.php">Back</button> </a>


<?php include '../footer.php' ?>

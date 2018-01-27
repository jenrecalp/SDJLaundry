<?php
$id=$_GET['id'];

$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
$query = "select * from staff where id=".$id;
//execute query, save result to $result variable
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

	?>



<?php include '../header.php' ?>

	<form method = "POST" action = "" >
		Firstname: <input type = "text" name = "firstname" value="<?php echo $row['firstname']; ?> " readonly><br>
		Lastname: <input type = "text" name = "lastname" value="<?PHP echo $row['lastname']; ?>" readonly><br>
		Email: <input type = "email" name = "email" value="<?PHP echo $row['email']; ?>" readonly><br>
		Age: <input type = "text" name = "age" value="<?PHP echo $row['age']; ?>" readonly><br>
		Contact Number: <input type = "text" name = "contact_no" value="<?PHP echo $row['contact_no']; ?>"  readonly><br>
		Birthday: <input type = "date" name = "birthday" value="<?PHP echo $row['birthday']; ?>" readonly><br>
		Address: <input type = "text" name = "address" value="<?PHP echo $row['address']; ?>" readonly><br>
		Username: <input type = "text" name = "username" value="<?PHP echo $row['username']; ?>" readonly><br>
		Password: <input type = "password" name = "password" value="<?PHP echo $row['password']; ?>" readonly><br>
	<button><a href = "staffIndex.php">Back</button> </a>
	</form> 

	<button><a href = "../logout.php">Logout</button> </a>


<?php include '../footer.php' ?>
<?php
$id=$_GET['id'];

$con = mysqli_connect('localhost', 'root', '', 'sdjlaundry');
$query = "select * from staff where id=".$id;
//execute query, save result to $result variable
$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if(isset($_POST['submit']))
{
	$con2=mysqli_connect('localhost','root','','sdjlaundry');

	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$em=$_POST['email'];
	$ag=$_POST['age'];
	$cn=$_POST['contact_no'];
	$bd=$_POST['birthday'];
	$ad=$_POST['address'];
	$un=$_POST['username'];
	$pw=$_POST['password'];

	$query = "UPDATE staff SET firstname='$fn',lastname='$ln',email='$em',age='$ag',contact_no='$cn',birthday='$bd',address='$ad',username='$un',password=md5('$pw') WHERE id='".$id."';";
		
		if (mysqli_query($con2, $query)) {
			echo "<script>alert('Successfully Updated');window.location.href='staffIndex.php';</script>";
		}
		else{
			echo "<script>alert('Connection Failed'); windows.location.href='staffIndex.php';</script>";	
		}



}
	

?>





<?php include '../header.php' ?>

	<form method = "POST" action = "" >
		Firstname: <input type = "text" name = "firstname" value="<?php echo $row['firstname']; ?>"><br>
		Lastname: <input type = "text" name = "lastname" value="<?PHP echo $row['lastname']; ?>"><br>
		Email: <input type = "email" name = "email" value="<?PHP echo $row['email']; ?>"><br>
		Age: <input type = "text" name = "age" value="<?PHP echo $row['age']; ?>"><br>
		Contact Number: <input type = "text" name = "contact_no" value="<?PHP echo $row['contact_no']; ?>"><br>
		Birthday: <input type = "date" name = "birthday" value="<?PHP echo $row['birthday']; ?>"><br>
		Address: <input type = "text" name = "address" value="<?PHP echo $row['address']; ?>"><br>
		Username: <input type = "text" name = "username" value="<?PHP echo $row['username']; ?>"><br>
		Password: <input type = "password" name = "password" value="<?PHP echo $row['password']; ?>"><br>
		<button type = "submit" name ="submit">Submit</button>
	</form> 
	<br>
	<br>
	<br>

<?php include '../footer.php' ?>




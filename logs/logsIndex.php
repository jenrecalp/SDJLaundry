<?php 

$con = mysqli_connect('localhost','root','','sdjlaundry');
$query = "SELECT * FROM staff;";
$result = mysqli_query($con,$query);
?>


<?php include '../header.php' ?>
<fieldset><br>
		<button><a href='../staff/staffIndex.php'>  STAFF</button></a>
		<button><a href='../product/productIndex.php'>  PRODUCT</button></a>
		<button><a href='../inventory/inventoryIndex.php'>  INVENTORY</button></a>
		<button><a href='logsIndex.php'>  LOGS</button></a>
		<button><a href = "logout.php">Logout</button> </a>
</fieldset><br><br><br>
<button class="button button1"><a href='staff/staffAdd.php'> Add Staff</button></a><br><br>
	<table width="400" cellpadding=4 celspacing=4 border=1 id="table_id">
	<thead>	
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Age</th>
			<th>Contact Number</th>
			<th>Birthday</th>
			<th>Address</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
				while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
					<td><?php echo $row['firstname'] ?></td>
					<td><?php echo $row['lastname']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['age']?></td>
					<td><?php echo $row['contact_no']?></td>
					<td><?php echo $row['birthday']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['password']?></td>
					<td><a href="staff/staffUpdate.php?action=edit&id=<?php echo $row['id'] ?>">Edit</a> | 
						<a href="staff/staffDelete.php?action=delete&id=<?php echo $row['id'] ?>">Delete</a> |
						<a href="staff/staffView.php?action=view&id=<?php echo $row['id'] ?>">View</a></td>
				</tr>
					
				<?php } ?>
		</tr>
	</tbody>	
	</table>

	<?php include '../footer.php' ?>
	

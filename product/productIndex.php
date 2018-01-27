<?php 

$con = mysqli_connect('localhost','root','','sdjlaundry');
$query = "SELECT * FROM item_type;";
$result = mysqli_query($con,$query);
?>


<?php include '../header.php' ?>
<fieldset><br>
		<button><a href='../staff/staffIndex.php'>  STAFF</button></a>
		<button><a href='productIndex.php'>  PRODUCT</button></a>
		<button><a href='../inventory/inventoryIndex.php'>  INVENTORY</button></a>
		<button><a href='../logs/logsIndex.php'>  LOGS</button></a>
		<button><a href = "../logout.php">Logout</button> </a>
</fieldset><br><br><br>
<button class="button button1"><a href='productAdd.php'> Add Product</button></a><br><br>
	<table width="400" cellpadding=4 celspacing=4 border=1 id="table_id">
	<thead>	
		<tr>
			<th>Product's Name</th>
			<th>Price</th>
			<th>Sales</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
				while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['price']?></td>
					<td><?php echo $row['email']?></td>
					<td><a href="staff/staffUpdate.php?action=edit&id=<?php echo $row['id'] ?>">Edit</a> | 
						<a href="staff/staffDelete.php?action=delete&id=<?php echo $row['id'] ?>">Delete</a> |
						<a href="staff/staffView.php?action=view&id=<?php echo $row['id'] ?>">View</a></td>
				</tr>
					
				<?php } ?>
		</tr>
	</tbody>	
	</table>

	<?php include '../footer.php' ?>
	

<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Firstname:</label><input type="text" name="firstname">
			<label>Lastname:</label><input type="text" name="lastname">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
                    while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstname']; ?></td>
							<td><?php echo $row['lastname']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>
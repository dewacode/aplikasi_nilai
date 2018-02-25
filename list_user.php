<?php require_once 'ajax/db_connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="manageMember">
		<a href="add_user.php"><button type="button">Add Member</button></a>
		<table border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
            		$sql = "SELECT * FROM users;";
            		$result = $con->query($sql);
 
            		if($result->num_rows > 0) {
            			while($row = $result->fetch_assoc()) {
                    		echo "<tr>
                        			<td>".$row['first_name']."</td>
                        			<td>".$row['last_name']."</td>
                        			<td>".$row['email']."</td>
                        			<td>
                            
                            		<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            		<a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        			</td>
                    			</tr>";
                		}
            		} else {
                		echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            		}
            	?>
			</tbody>
		</table>
	</div>
</body>
</html>
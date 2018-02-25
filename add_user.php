<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50px;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>
</head>
<body>
	<fieldset>
		<legend>Add Member</legend>

		<form action="ajax/create.php" method="POST">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>First Name</th>
					<td><input type="text" name="fname" placeholder="First Name"></td>
				</tr>
				<tr>
					<th>Last Name</th>
					<td><input type="text" name="lname" placeholder="Last Name"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email" placeholder="Email"></td>
				</tr>
				<tr>
					<td><button type="submit">Save</button></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>
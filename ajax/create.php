<?php

require_once 'db_connection.php';

 if ($_POST) {
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$email = $_POST['email'];

 	$sql = "INSERT INTO users(first_name, last_name, email) VALUES ('$fname', '$lname', '$email')";

 	if ($con->query($sql) === TRUE) {
 		echo "<p>New record successfully created</p>";
 		echo "<a href='../add_user.php'><button>Back</button></a>";
 		echo "<a href='../list_user.php'><button>Home</button></a>";
	} else {
		echo "Error" . $sql . ' ' . $con->connect_error;
	}

	$con->close();
 }

?>
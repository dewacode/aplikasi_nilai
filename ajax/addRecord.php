<?php
	if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];

		$query = "INSERT INTO users(first_name, last_name, email) VALUES('$fname', '$lname', '$email')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>
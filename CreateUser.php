<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "umarkhan", "duk9Leba", "umarkhan");
$username = $_POST["username"];
$duplicate = false;	// true is username was found in database

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

// empty username
if ($username == "") {
	echo "<h4>Username did not meet length requirement</h4>";
}
// not empty username
else {
	// go through database to check if username already taken
	$query = "SELECT user_id from Users";
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			// found username is database. no duplicatess allowed
			if ($row["user_id"] == $username) {
				$duplicate = true;
			}
		}
		$result->free();
	}
	// duplicate, don't add to database
	if ($duplicate) {
		echo "<h4>The username " .$username. " was already taken.  Try again.</h4>";
	}
	// add to database
	else {
		// add usernmae to database
		$query = "INSERT INTO Users VALUES('".$username."');";
		if ($result = $mysqli->query($query)) {
			echo "<h4>The user " .$username. " was created</h4>";
		}
	}
}

$mysqli->close();

?>


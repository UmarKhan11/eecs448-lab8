<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "umarkhan", "duk9Leba", "umarkhan");
$username = $_POST["username"];
$content = $_POST["textPost"];
$username_status = true;
$content_status = true;

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

if ($username == "") {
	$username_status = false;
}

if ($content == "") {
	$content_status = false;
}

if ($content_status && $username_status) {
	$query = 'INSERT INTO Posts (author_id, content) VALUES("'.$username.'","'.$content.'");';
	if ($result = $mysqli->query($query)) {
		echo "<h4>Post added to database</h4>";
	}
	else {
		echo "<p>Error</p>";
	}
}
else {
	if ($username_status == false) {
		echo "<h4>Username was invalid. Try again.</h4>";
	}
	if (!$content_status) {
		echo "<h4>Content was invalid. Try again.</h4>";
	}
}



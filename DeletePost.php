<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "umarkhan", "duk9Leba", "umarkhan");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

echo "<p>working</p>";

$delete_array = $_POST['selected'];

if (!empty($delete_array)) {
	foreach ($delete_array as $a_post)  {
		$query = 'DELETE FROM Posts Where post_id="'.$a_post.'";';
		if ($result = $mysqli->query($query)) {
			$result->free();
		}
		$result->free();
	}
	echo "<h4>Deleted Posts</h4>";
}

?>

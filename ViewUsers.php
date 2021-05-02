<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "umarkhan", "duk9Leba", "umarkhan");

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

echo "<html>";
echo "<body>";

echo "<table border='1' width='400'>";
	echo "<tr>";
		echo"<td>Usernames</td>";
	echo "</tr>";

	$query = "SELECT user_id FROM Users";
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$username = $row['user_id'];
			echo "<tr>";
				echo "<td>".$username."</td>";
			echo "</tr>";
		}
		$result->free();
	}
	else {
		echo "<tr>";
			echo "<td>ERROR</td>";
		echo "</tr>";
	}
echo "</table>";
echo "</body>";
echo "</html>";
?>

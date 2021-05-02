<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "umarkhan", "duk9Leba", "umarkhan");
$username = $_POST["username"];

/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

echo "<html>";
echo"<body>";
echo "<table border='1' width='400'>";

echo "<tr>";
	echo "<td>Posts for " .$username. "</td>";
echo "</tr>";

$query = 'SELECT content FROM Posts WHERE author_id ="'.$username.'";';

if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		$content = $row['content'];
		echo "<tr>";
			echo "<td>".$content."</td>";
		echo "</tr>";
	}
	$result->free();
}
else {
	echo "<tr>";
		echo "<td>NO POSTS</td>";
	echo "</tr>";
}

echo "</table>";
echo "</body>";
echo "</html>";
?>

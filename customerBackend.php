<?php
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$s1 = $_POST["s1"];
	$s2 = $_POST["s2"];
	$s3 = $_POST["s3"];


	$total = $q1*5+$q2*10+$q3*15;
	$cost = $total+$s1+$s2+$s3;

	echo "Welcome " . $username . "<br>";
	echo "You're password is " . $password . "<br>";

	if ($s2 != 0) {
		echo "Shipping $" .$s2. "<br>";
	}
	else if ($s3 != 0) {
		echo "Shipping $" .$s3. "<br>";
	}
	else {
		echo "Shipping $0<br>";
	}

	echo "Total cost including shipping: $" . $cost . "<br>";
	echo "<html>";

	echo "<table border='1' width='400'>";
		echo "<tr bgcolor='orange'>";
			echo "<td bgcolor='orange'></td>";
			echo "<td>Quantity</td>";
			echo "<td>Cost Per Item</td>";
			echo "<td>Sub Total</td>";
		echo "<tr>";

                echo "<tr>";
			echo "<td>waterbottle 1</td>";
                        echo "<td>".$q1."</td>";
                        echo "<td>5</td>";
                        echo "<td>".($q1*5)."</td>";
                echo "<tr>";

                echo "<tr>";
			echo "<td>waterbottle 2</td>";
                        echo "<td>".$q2."</td>";
                        echo "<td>10</td>";
                        echo "<td>".($q2*10)."</td>";
                echo "<tr>";


                echo "<tr>";
			echo "<td>waterbottle 3</td>";
                        echo "<td>".$q3."</td>";
                        echo "<td>15</td>";
                        echo "<td>".($q3*15)."</td>";
                echo "<tr>";

		echo "<tr>";
			echo "<td>Shipping</td>";
			if ($s2 != 0) {
				echo "<td>$".$s2."</td>";
			}
			else if ($s3 != 0) {
				echo "<td>$".$s3."</td>";
			}
			else {
				echo "<td>$0</td>";
			}


	echo "<table/>";

	
?>


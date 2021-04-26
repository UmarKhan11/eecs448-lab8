<?php
	echo "<p>".Results."</p>";
	$score = 0;

	$q1 = $_POST['kansas'];
	$q2 = $_POST['missouri'];
	$q3 = $_POST['texas'];
	$q4 = $_POST['ohio'];
	$q5 = $_POST['florida'];

	echo "<p>".$qq1."</p>";
	echo "<p>Question 1: what is the capital of Kansas?</p>";
	echo "You answered: " .$q1. "<br>";
	echo "Correct answer: Topeka<br>";
	if ($q1 == 'Topeka') {
		$score = $score + 20;
	}

        echo "<p>Question 2: what is the capital of Missouri?</p>";
        echo "You answered: " .$q2. "<br>";
        echo "Correct answer: Jefferson City<br>";
        if ($q2 == 'Jefferson City') {
                $score += 20;
        }

        echo "<p>Question 3: what is the capital of Texas?</p>";
        echo "You answered: " .$q3. "<br>";
        echo "Correct answer: Austin<br>";
        if ($q3 == 'Austin') {
                $score += 20;
        }

        echo "<p>Question 4: what is the capital of Ohio?</p>";
        echo "You answered: " .$q4. "<br>";
        echo "Correct answer: Columbus<br>";
        if ($q4 == 'Columbus') {
                $score += 20;
        }

        echo "<p>Question 5: what is the capital of Florida?</p>";
        echo "You answered: " .$q5. "<br>";
        echo "Correct answer: Tallahassee<br>";
        if ($q5 == 'Tallahassee') {
                $score += 20;
        }

	echo "<br>Score: " .$score. "%<br>";
?>

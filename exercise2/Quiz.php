<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);

$question1 = "Who was the last KU basketball player to be drafted #1 overall in the NBA?";
$question2 = "How many times has KU won an NCAA Championship?";
$question3 = "Which KU basketball coach is the only to have a losing record?";
$question4 = "Who is the all-time scoring leader for KU men's basketball?";
$question5 = "What #2 team did KU beat in triple overtime on January 4, 2016?";

$answer1 = "Andrew Wiggins";
$answer2 = "5";
$answer3 = "James Naismith";
$answer4 = "Danny Manning";
$answer5 = "Oklahoma";

$response1 = $_POST["q1"];
$response2 = $_POST["q2"];
$response3 = $_POST["q3"];
$response4 = $_POST["q4"];
$response5 = $_POST["q5"];

$score = 0;

if ($answer1 == $response1)
{
	$score++;
}
if ($answer2 == $response2)
{
	$score++;
}
if ($answer3 == $response3)
{
	$score++;
}
if ($answer4 == $response4)
{
	$score++;
}
if ($answer5 == $response5)
{
	$score++;
}

function printQuestion($quest, $ans, $res, $i)
{
	echo "<p>Question " . $i . ": " . $quest . "</p>";
	echo "<p>You answered: " . $res . ".</p>";
	echo "<p>Correct answer is: " . $ans . ".</p>";
}

function printResults()
{
	# It would probably be better to have used an array and a for loop, but this works too.
	printQuestion($question1, $answer1, $response1, 1);
	printQuestion($question2, $answer2, $response2, 2);
	printQuestion($question3, $answer3, $response3, 3);
	printQuestion($question4, $answer4, $response4, 4);
	printQuestion($question5, $answer5, $response5, 5);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz Results</title>
</head>
<body>
	<h1>Quiz Results!</h1>
<?php  
	printQuestion($question1, $answer1, $response1, 1);
	printQuestion($question2, $answer2, $response2, 2);
	printQuestion($question3, $answer3, $response3, 3);
	printQuestion($question4, $answer4, $response4, 4);
	printQuestion($question5, $answer5, $response5, 5);
?>
	<p>Your score was <?php echo $score; ?>/5</p>
	<p>Your percentage was <?php echo intval($score) * 100 / 5; ?>%</p>
</body>
</html>

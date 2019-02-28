<?php

function drawTable() 
{
	for ($i = 1; $i <= 100; $i++)
	{
		echo "<tr>\n";
		for ($j = 1; $j <= 100; $j++)
		{
			echo "<td>" . ($i * $j) . "</td>";
		}
		echo "</tr>\n";
	}	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication Table</title>
</head>
<body>
	<table>
		<?php drawTable(); ?>
	</table>
</body>
</html>

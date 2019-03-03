<?php

function drawTable() 
{
	for ($i = 0; $i <= 100; $i++)
	{
		echo "<tr>";
		for ($j = 0; $j <= 100; $j++)
		{
			if ($i == 0 && $j == 0)
			{
				echo "<td></td>";
			}
			else if ($i == 0)
			{
				echo "<td>" . $j . "</td>";
			}
			else if ($j == 0)
			{
				echo "<td>" . $i . "</td>";
			}
			else
			{
				echo "<td>" . ($i * $j) . "</td>";
			}
		}
		echo "</tr>";
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

<?php

echo "<table border=\"5\">";
for ($r = 1; $r <= 100; $r++)
{
	echo("<tr>");
	for ($c = 1; $c <= 100; $c++)
	{
		echo '<td>' .($c * $r).'</td>';
	}
	echo("<tr>");
}
echo("</table>");
?>

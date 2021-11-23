<?php
$username = $_POST["uname"];
$password = $_POST["pw"];
$q1 = $_POST["quantity1"];
$q2 = $_POST["quantity2"];
$q3 = $_POST["quantity3"];
$ship = $_POST["s1"];
$shipName = "";

$p1 = $q1 * 5;
$p2 = $q2 * 7;
$p3 = $q3 * 10;

if($ship == 0)
{
    $shipName = "Free 7-day";
}
if($ship == 5)
{
    $shipName = "3-day";
}
if($ship == 50)
{
    $shipName = "Overnight";
}

$total = $p1 + $p2 + $p3 + $ship;

echo("<link rel=\"stylesheet\" href=\"style.css\">");
echo("Hello, " . $username . "!<br>");
echo("Your totally-not-extremely-insecure password is: " . $password);

echo '<table style="width:100%" border=\"5\">';
echo '<tr>';
echo '<th></th>';
echo '<th>Quantity</th>';
echo '<th>Cost per item</th>';
echo '<th>Subtotal</th>';
echo '</tr>';
echo '<tr>';
echo '<td>Item 1</td>';
echo '<td>' . $q1 .'</td>';
echo '<td>$5</td>';
echo '<td>$' . $p1 .'</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Item 2</td>';
echo '<td>' . $q2 .'</td>';
echo '<td>$7</td>';
echo '<td>$' . $p2 .'</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Item 3</td>';
echo '<td>' . $q3 .'</td>';
echo '<td>$10</td>';
echo '<td>$' . $p3 .'</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Shipping</td>';
echo '<td></td>';
echo '<td>' . $shipName . '</td>';
echo '<td>$' . $ship . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Total</td>';
echo '<td></td>';
echo '<td></td>';
echo '<td>$' . $total . '</td>';
echo '</tr>';
echo '</table>';
?>
<?php
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$score = 0;

echo("Question 1: Who officially won the 2001 Tour de France?<br>");
echo("Your answer: " . $q1 . "<br>");
echo("Correct answer: Nobody!" . "<br><br>");

echo("Question 2: What country was not represented in the 2021 Tour de France?<br>");
echo("Your answer: " . $q2 . "<br>");
echo("Correct answer: Japan" . "<br><br>");

echo("Question 3: Which of these races is not considered a cycling classic?<br>");
echo("Your answer: " . $q3 . "<br>");
echo("Correct answer: Tour of Britain" . "<br><br>");

echo("Question 4: Which one of these events is not considered a cycling monument?<br>");
echo("Your answer: " . $q4 . "<br>");
echo("Correct answer: Tour de France" . "<br><br>");

echo("Question 5: Where was the first recorded bike race held?<br>");
echo("Your answer: " . $q5 . "<br>");
echo("Correct answer: Paris" . "<br><br>");

global $q1, $q2, $q3, $q4, $q5, $score;
if ($q1 == "Nobody!")
{
    $score += 20;
}
if ($q2 == "Japan")
{
    $score += 20;
}
if ($q3 == "Tour of Britain")
{
    $score += 20;
}
if ($q4 == "Tour de France")
{
    $score += 20;
}
if ($q5 == "Paris")
{
    $score += 20;
}

echo ("Score: " . $score . "%");

?>
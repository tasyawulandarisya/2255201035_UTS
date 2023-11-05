<?php
// Write your code below
//Tasya Wulandari
//2255201035
//Kelas A
$round_one = ["A", "B", "first winner"];

$round_two = ["second winner", "B", "C", "D"];

$round_three = ["A", "B", "C", "D", "third winner"];


$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);

echo implode(", ", $winners);
?>
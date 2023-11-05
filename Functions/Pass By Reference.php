<?php
// Write your code below:
//Tasya Wulandari
function convertToQuestion(&$str)
{
  $str = "Do you think " . $str . "?\n";
}
//2255201035
$string_one = "I have cat";
convertToQuestion($string_one);
$string_two = "flowers are nice";
convertToQuestion($string_two);
$string_three = "chicken is my favorite food";
convertToQuestion($string_three);
//Kelas A
echo $string_one;
echo $string_two;
echo $string_three;
?>
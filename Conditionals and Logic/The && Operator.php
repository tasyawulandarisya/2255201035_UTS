<?php
namespace Codecademy;
//Tasya Wulandari
function clapYourHands ($is_happy, $Know_it)
{
  if ($is_happy && $Know_it){
  return "CLAP!";
} else {
  return ":(";
 }
}
//2255201035
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//Kelas A
?>
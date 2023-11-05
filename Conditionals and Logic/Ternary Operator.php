<?php
namespace Codecademy;
//Tasya Wulandri
function ternaryCheckout($items)
{
return $items <= 12 ? "express lane" : "regular lane";
}
//2255201035
function ternaryVote($age)
{
  return $age >= 18 ? "yes" : "no";
}
//Kelas A
echo ternaryCheckout(4);
echo "\n\n";
echo ternaryCheckout(16);
echo "\n\n";
echo ternaryVote(10);
echo "\n\n";
echo ternaryVote(20);
?>
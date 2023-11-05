<?php
namespace Codecademy;
//Tasya Wulandari
function willWeEat($meal_type, $arehungry)
{
  if ($meal_type === "dessert" || $arehungry){
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}
//2255201035
echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
//Kelas A
?>
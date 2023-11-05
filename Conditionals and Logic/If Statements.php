<?php
//Tasya Wulandari
//2255201035
//Kelas A
namespace Codecademy;
function markAnswer($is_correct)
{
  if ($is_correct){
    return "green";
  }else {
    return "red";
  }
}
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
?>
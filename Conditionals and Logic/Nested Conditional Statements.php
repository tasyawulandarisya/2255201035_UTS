<?php
namespace Codecademy;
//Tasya Wulandari
function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    }else{
      return "not both";
    }
  } else {
    return "not both";
  }
}
//2255201035
echo both(True, True);
echo "\n";
echo both(False, False);
//Kelas A
?>
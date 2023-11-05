<?php
namespace Codecademy;
//Tasya Wulandari
function airQuality($color){
switch ($color){
  case "green":  
    echo "good";
    break;
  case "yellow":  
    echo "moderate";
    break;
  case "orange":  
    echo "unhealthy for sensitive groups";
    break;
  case "red":  
    echo "unhealthy";
    break;
  case "purple":  
    echo "very unhealthy";
    break;
  case "maroon":  
    echo "hazardous";
    break;
  default:
  echo "invalid color";
  }
}
//2255201035
airQuality("green");
echo "\n";
airQuality("yellow");
echo "\n";
airQuality("maroon");
echo "\n";
airQuality("orange");
echo "\n";
airQuality("red");
echo "\n";
airQuality("purple");
echo "\n";
airQuality("black");
echo "\n";
//Kelas A
?>
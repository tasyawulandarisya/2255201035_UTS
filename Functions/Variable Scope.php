<?php
//Tasya Wulandari
$language = "PHP";
$topic = "scope";
//2255201035
function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}
//Kelas A
echo generateLessonName($topic);
?>
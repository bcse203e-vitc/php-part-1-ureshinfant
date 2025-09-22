<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Ascending by value:<br>";
asort($age);
print_r($age);

echo "<br><br>Ascending by key:<br>";
ksort($age);
print_r($age);

echo "<br><br>Descending by value:<br>";
arsort($age);
print_r($age);

echo "<br><br>Descending by key:<br>";
krsort($age);
print_r($age);
?>

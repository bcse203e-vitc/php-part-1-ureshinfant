<?php
$Color = array('A'=>'Blue','B'=>'Green','c'=>'Red');

echo "Values are in lower case.<br>";
$lower = array_map('strtolower', $Color);
print_r($lower);

echo "<br><br>Values are in upper case.<br>";
$upper = array_map('strtoupper', $Color);
print_r($upper);
?>

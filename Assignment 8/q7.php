<?php
$x = array(1, 2, 3, 4, 5);
array_splice($x, 3, 0, '$');
echo "After inserting: ".implode(" ", $x);
?>

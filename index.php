<?php
$array1 = array("color" => "green", 2, 4);
$array2 = array("a", "b", "color" => "red", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
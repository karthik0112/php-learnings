<?php 
$x = 75;
$y = 25; 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];//globals keyword which is used to access anywhere in php
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];// we can update the values also 
}
addition();
echo $z;
echo "<br>";
echo $y;
?>
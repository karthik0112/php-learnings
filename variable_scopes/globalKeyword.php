<?php
$value1= 5;
$value2 = 10;
function myTest() {
  global $value1, $value2;
  $value2 = $value1 + $value2;
}
myTest();
echo $value2; // outputs 15
?>
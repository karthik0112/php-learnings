<?php
$a=array("a"=>"red","h"=>"green","c"=>"red");
$a1=array("a"=>"red","b"=>"gree","d"=>"red");
$c=(array_merge($a,$a1));
print_r($c);
print_r(array_unique($c));
?>
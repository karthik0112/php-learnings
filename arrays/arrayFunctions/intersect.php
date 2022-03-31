<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","b"=>"pink");

$result=array_intersect_key($a1,$a2);
print_r($result);
?>
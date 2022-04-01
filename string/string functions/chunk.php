<?php
$str = "Hello world!";
echo chunk_split($str,1,".");
echo"<br>";
echo chunk_split($str,5,"...");
?> 
 
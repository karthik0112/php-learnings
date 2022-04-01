<?php
$a=array(1,3,5,7,9);
$length=count($a);
for($i=0;$i<$length;$i++){ 
  echo $a[$i];
  
}
echo"<br>";  
foreach($a as $value){
    echo $value;
}

?>

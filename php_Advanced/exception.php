<?php
function divide($a,$b){
if($b==0){
  throw new Exception("divide by zero",23);
}
else{
    echo "result = ".$a/$b;
}
}
try{
divide(2,0);
}
catch(Exception $obj){
$c=$obj->getCode();
$m=$obj->getMessage();
$f=$obj->getFile();
$l=$obj->getLine();
echo"the error is occur ".$f ."at line ".$l." message ".$m. "code ".$c;
echo"\n";
}
finally{
    echo"process is completed";
}
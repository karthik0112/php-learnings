<?php
trait message1 {
    public function msg1() {
      echo "this is message 1"; 
    }
  }
trait message2 {
    public function msg2() {
      echo "this is message 2"; 
    }
  }  
class Welcome {
 use message1;
  }
  class Welcome1 {
    use message1,message2;
     }  
$obj = new Welcome();
$obj->msg1();
echo"\n";
$obj = new Welcome1();
$obj->msg1();
echo"\n";
$obj->msg2();
?>
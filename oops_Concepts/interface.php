<?php
interface Person1{
  public function p1(); 
}
interface person2{
    public function p2(); 
}
class person3 implements Person1,person2{  //In interface implements keyword is used,replaced by extend  
   public function p1(){
        echo "hello";
    }
    public function p2(){
        echo "world";
    } 
    public function p3(){
        echo "hello world";
    } 
}
$obj=new person3();
$obj->p1();
echo "<br/>";
$obj->p2();
echo "<br/>";
$obj->p3();

/*interface Person1{
  public function p1(); 
}
class person2 implements Person1{
    public function p1()
    {
        echo "iam karthi";
    }
}
class person3 implements Person1{
    public function p1()
    {
        echo "iam kishore";
    }
}

$obj=new person2();
$obj->p1();
echo "<br/>";
$obj=new person3();
$obj->p1();
echo "<br/>";*/
?>
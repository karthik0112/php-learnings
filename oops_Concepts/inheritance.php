<?php
class Person{
  function p1(){
      echo "iam karthik";
  }
  function p2(){
    echo "iam kishore";
}
}
class person2 extends Person{
    function p3(){
        echo "hello world";
    }
}
$obj=new Person();
$obj->p1();
echo "<br/>";
$obj->p2();
echo "<br/>";
$obj1=new person2();//if we want to access parent class we should create new object for child class  
$obj1->p3();
?>
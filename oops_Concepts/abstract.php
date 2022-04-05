<?php
abstract class a{
    abstract public function add();
    abstract public function sub();
    public function div(){
        echo "this is division";
    }
}
class b extends a {
    public function add(){
    echo "this is addition";
    }
    public function sub(){
        echo "this is substraction";
    }
}

$obj=new b();
$obj->add();
echo"<br>";
$obj->sub();
echo"<br>";
$obj->div();
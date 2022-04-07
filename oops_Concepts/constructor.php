<?php
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name, $color) {
//     $this->name = $name; 
//     $this->color = $color; 
//   }
//   function get_name() {
//     return $this->name;
//   }
//   function get_color() {
//     return $this->color;
//   }
// }

// $apple = new Fruit("Apple", "red");
// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();
class MyClass {

   // public $param;
  
    public function __construct($param) {
      //$this->param = $param;
      echo "hii".$param;
    }
  }
  
  $myClass = new MyClass('apple');
   // foobar
?>
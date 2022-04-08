<?php
    // class Person {
    //     // first name of person
    //     private $fname;
    //     // last name of person
    //     private $lname;
        
    //     // public function to set value for fname
    //     public function setFName($fname) {
    //         $this->fname = $fname;
    //     }
        
    //     // public function to set value for lname
    //     public function setLName($lname) {
    //         $this->lname = $lname;
    //     }
        
    //     // public function to 
    //     public function showName() {
    //         echo "My name is: " . $this->fname . " " . $this->lname;
    //     }
    // }
    
    // // creating class object
    // $john = new Person();
    
    // // trying to access private class variables
    // $john->fname = "John";  // invalid
    // $john->lname = "Wick";  // invalid
    
    // // calling the public function to set fname and lname
    // $john->setFName("John");
    // $john->setLName("Wick");
    class Person {
        // first name of person
        private $name;
        
        // public function to set value for name (setter method)
        public function setName($name) {
            $this->name = $name;
        }
        
        // public function to get value of name (getter method)
        public function getName() {
             echo "My name is " . $this->name;
        }
    }
    
    // creating class object
    $john = new Person();
    
    // calling the public function to set fname
    $john->setName("John Wick");
    
    // getting the value of the name variable
    $john->getName();

?>


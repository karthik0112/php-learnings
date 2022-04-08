<?php  
class Javatpoint {    
public $name="Ajeet";  
protected $profile="HR";   
private $salary=5000000;  //we cant access the private modifier from derived class
public function show()  
{  
echo "Welcome : ".$this->name."<br/>";  
echo "Profile : ".$this->profile."<br/>";  
echo "Salary : ".$this->salary."<br/>";  
}  
}     
class childs extends Javatpoint  
{  
public function show1()  
{  
echo "Welcome : ".$this->name."<br/>";  
echo "Profile : ".$this->profile."<br/>";  
echo "Salary : ".$this->salary."<br/>";  
}  
}     
$obj= new childs;     
//$obj->show1(); 

$obj->show();  
echo"< br>";
?>  
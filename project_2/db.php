<?php
    $host='localhost';
    $username='root';
    $password='karthik@123';
    $dbname = "mydb";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:'. mysqli_error());
        }
?>
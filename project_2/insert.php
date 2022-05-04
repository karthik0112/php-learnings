<?php
include_once 'db.php';
 
    
     $firstname = 'Hello';
     $lastname = 'Test';
     $mobile = '9874561230';
 
     $sql = "INSERT INTO users (firstname,lastname,mobile)
     VALUES ('$name','$email','$mobile')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
 
?>
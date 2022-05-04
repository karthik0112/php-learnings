<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        
        <?php
        $conn = mysqli_connect("localhost", "root","karthik@123", "schools");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
      $id =  $_REQUEST['id'];  
      $Name =  $_REQUEST['Name'];
      $age = $_REQUEST['age'];
      $Email = $_REQUEST['Email'];
      $gender = $_REQUEST['gender'];

          
        // Performing insert query execution
        // here our table name is student
        $sql = "INSERT INTO student (id,Name,age,Email,gender) VALUES ( '$id','$Name', '$age','$Email','$gender')";
          
        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully <br>";
            echo nl2br("\n ID is : $id \nNAME IS : $Name \nAGE IS : $age \nEMAIL IS : $Email \nGENDER IS : $gender");
        } else{
            echo "ERROR:Sorry $sql. mysqli_error($conn)";
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>
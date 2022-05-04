<!DOCTYPE html>
<html>
  
<head>
    <title>PHP FORMS</title>
</head>
  
<body>
    <?php
    
    // define variables and set to empty values
    $idErr = $nameErr = $ageErr = $EmailErr = $genderErr = "";
    $id = $Name = $age = $Email = $gender = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        $idErr = "id is required";
      } else {
        $id = test_input($_POST["id"]);
        if (!preg_match("/^[0-9]+$/", $id)) {
            $idErr="invalid id";  
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $NameErr = "Name is required";
      } else {
        $name = test_input($_POST["Name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
          $NameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["age"])) {
        $ageErr = "age is required";
      } else {
        $age = test_input($_POST["age"]);
        if (!preg_match("/^[0-9]+$/", $age)) {
            $ageErr="invalid age";  
        }
    }
      
      if (empty($_POST["Email"])) {
        $EmailErr = "Email is required";
      } else {
        $Email = test_input($_POST["Email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $EmailErr = "Invalid email format";
        }
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }
    ?>
    
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form action="insert.php" method="post"> 
    id: <input type="text" name="id" value="<?php echo $id;?>">
      <span class="error">* <?php echo $idErr;?></span>
      <br><br>
      Name: <input type="text" name="Name" value="<?php echo $Name;?>">
      <span class="error">* <?php echo $NameErr;?></span>
      <br><br>
      age: <input type="text" name="age" value="<?php echo $age;?>">
      <span class="error">* <?php echo $ageErr;?></span>
      <br><br>
      E-mail: <input type="text" name="Email" value="<?php echo $Email;?>">
      <span class="error">* <?php echo $EmailErr;?></span>
      <br><br>
      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form>
<!-- <h1>USER INPUTS</h1>
// <form action="insert.php" method="post">
//   id: <input type="text" name="id">
//   <br><br>
//   Name: <input type="text" name="Name">
//   <br><br>
//   age: <input type="text" name="age">
//   <br><br>
//   Email:  <input type="text" name="Email">
//   <br><br>
//   Gender:
//   <input type="radio" name="gender" value="female">Female
//   <input type="radio" name="gender" value="male">Male
//   <input type="radio" name="gender" value="other">Other
//   <br><br>
//   <input type="submit" name="submit" value="Submit">  
// </form>
// </body>
       
              
              
//  <p>
//     <label for="id">id:</label>
//     <input type="number" name="id" id="id">
// </p> 
// <p>
//     <label for="Name">Name:</label>
//     <input type="text" name="Name" id="Name">
// </p>  
// <p>
//     <label for="age">age:</label>
//     <input type="number" name="age" id="age">
// </p>
// <p>
//     <label for="Email">Email:</label>
//     <input type="Email" name="Email" id="Email">
// </p>
//    <input type="submit" value="Submit"> 
//     </form>-->
        
 </body> 
  
</html>
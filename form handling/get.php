<?php
if(isset($_GET['submitt'])){
    echo "hello {$_GET['text']}";
}
?>
<html>
<body>
<form action="" method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

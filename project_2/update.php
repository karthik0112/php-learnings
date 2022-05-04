<?php 
 
include_once 'db.php';
 
$sql = "UPDATE users SET firstname = 'Hello',lastname = 'Test',mobile = '9874561230' WHERE id=1 ";
 
$query = mysqli_query($conn,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
else
{
    echo "Data successfully updated";
}
 
   
?>
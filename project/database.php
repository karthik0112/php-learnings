<?php
$dbconn=mysqli_connect("localhost","root","karthik@123","school") or die("hijihj");
if($dbconn){
echo"hi";
}else{
    die("connection failed");
}
<?php
$datenow=getdate();
echo "Toady's Date:<br/>";
echo $datenow['mday']."<br>";
echo $datenow['mon']."<br>";
echo $datenow['year']."<br>";
echo "Toady's Date:".$datenow['mday'].'/'.$datenow['mon'].'/'.$datenow['year'];
?>
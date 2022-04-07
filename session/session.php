<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION['user']="karthik";
echo "session enabled";
?>
<a href="sess.php">VISIT THE PAGE</a>
</body>
</html>


<!DOCTYPE html>
<html>
<body>
<?php
function myfunction($v)
{
if ($v==="kishore")
  {
  return "yavar";
  }
return $v;
}
$a=array("karthi","kishore","ajith");
print_r(array_map("myfunction",$a));
?>
</body>
</html>

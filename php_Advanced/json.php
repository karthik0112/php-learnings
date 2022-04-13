<?php
$jsonobj = '{"Peter":"35","Ben":"37","Joe":"438"}';
var_dump(json_decode($jsonobj, true));//it converts json object into associative array//it converts associative arrays into json format  or php object
?>
<?php
$jsonobj = array("Peter"=>'35',"Ben"=>'37',"Joe"=>'43');
echo json_encode($jsonobj);//it converts associative arrays into json format
?>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj,true);
// echo $obj->Peter;
// echo $obj->Ben;
// echo $obj->Joe;
echo $obj["Peter"];
echo $obj["Ben"];
echo $obj["Joe"];
echo"\n";
?>
<?php
$jsonobj = '{"Peter":35,
    "Ben":37,
    "Joe":43
}';
$obj = json_decode($jsonobj);
foreach($obj as $key => $value) {
  echo $key ."=>". $value . "<br>";
}
?>

<?php
echo time();//it will give unix number so human can't understand
print date("m/d/y G.i:s <br>",time()).'<br/>';
print_r("today is ");
print date("j of F Y,\a\\t g.i a",time());
?>
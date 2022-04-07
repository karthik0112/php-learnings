<?php
setcookie('user','karthi');
?>
<html>
<body>
    <?php
    if(!isset($_COOKIE['user'])){
        echo "cookies not activated";
    }else
    {
        echo "cookie value :".$_COOKIE['user'];
    }
    ?>
</body>
</html>
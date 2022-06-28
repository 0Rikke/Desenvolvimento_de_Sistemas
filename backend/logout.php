<?php

setcookie('login',$_COOKIE['cookie'] , time()-3600, "/");
sleep(1);
header("Location: ../frontend/index.php"); 


?>
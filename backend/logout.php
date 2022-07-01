<?php

setcookie('login',$_COOKIE['cookie'] , time()-3600, "/");
// ta sem animação nenhuma so some depois de um segundo tenho que ver o que eu vou fazer com isso 

sleep(1);
header("Location: ../frontend/index.php"); 


?>
<?php

require "lib/classCliente.php";

try{
    $c = new Cliente;
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $count = $c->procurar($nome,$senha);
 
    if ($count<=0)
    {
        echo 'vixe fera ta tentando me tapear?';
        header("Location: ../frontend/login.php"); 
    }else
    {
        echo 'é isso irmao passa pianinho pode cre ?';
        setcookie('login', $nome, time() + (86400 * 30), "/");
        header("Location: ../frontend/index.php"); 
    }
    
    
}catch( PDOException $e){
    throw new Exception("Error Processing Request" . $e);
    
}

var_dump($_COOKIE);
?>